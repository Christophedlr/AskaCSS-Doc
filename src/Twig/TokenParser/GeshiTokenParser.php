<?php

namespace App\Twig\TokenParser;

use App\Twig\Node\GeshiNode;
use Twig\Error\SyntaxError;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;


/**
 * Token parser for the "geshi" tag.
 */
class GeshiTokenParser extends AbstractTokenParser
{
    public function parse(Token $token)
    {
        $lineno = $token->getLine();
        $stream = $this->parser->getStream();

        $params = [
            'language' => false,
            'line_numbers' => false,
            'use_classes' => false,
            'class' => false,
            'id' => false
        ];

        $params ['language'] = $stream->expect(Token::STRING_TYPE)->getValue();

        while ($stream->test(Token::BLOCK_END_TYPE == false)) {
            $name = $stream->expect(Token::NAME_TYPE)->getValue();

            if (isset($params[$name])) {
                throw new SyntaxError(
                    sprintf(
                        'The parameter "%s" is not valid argument for GeSHI tag.', $name
                    ), $lineno
                );
            }

            if (in_array($name, ['class', 'id'])) {
                $operator = $stream->expect(Token::OPERATOR_TYPE)->getValue();

                if ($operator != '=') {
                    throw new SyntaxError(
                        sprintf(
                            '%s must be followed by an equal sign and a value.', $operator
                        ), $lineno
                    );
                }

                    $params[$name] = $stream->expect(Token::STRING_TYPE)->getValue();
            } else {
                $params[$name] = true;
            }
        }

        $stream->expect(Token::BLOCK_END_TYPE);
        $body = $this->parser->subparse(array($this, 'decideBlockEnd'), true);
        $stream->expect(Token::BLOCK_END_TYPE);

        return new GeshiNode($params, $body, $lineno, $this->getTag());
    }

    public function decideBlockEnd(Token $token)
    {
        return $token->test('endgeshi');
    }

    public function getTag()
    {
        return 'geshi';
    }
}
