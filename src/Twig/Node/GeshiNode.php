<?php

namespace App\Twig\Node;

use Twig\Compiler;
use Twig\Node\Node;

/**
 * Node of GeSHI Extension
 */
class GeshiNode extends Node
{
    public function __construct($params, $body, $lineno = 0, $tag = 'php')
    {
        parent::__construct(array ('body' => $body), $params, $lineno, $tag);
    }

    public function compile(Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($this->getNode('body'))
            ->write('$code = ob_get_clean();'."\n")
            ->write('$geshi = new \GeSHi($code, \''.$this->getAttribute('language').'\');'.PHP_EOL)
            ->write('$geshi->enable_keyword_links(false);'.PHP_EOL)
            ->write('echo $geshi->parse_code() .PHP_EOL;'.PHP_EOL);
    }
}
