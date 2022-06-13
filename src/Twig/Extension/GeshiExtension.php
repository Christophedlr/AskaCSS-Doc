<?php

namespace App\Twig\Extension;

use App\Twig\TokenParser\GeshiTokenParser;
use Twig\Extension\AbstractExtension as AbstractExtensionAlias;

/**
 * Class GeshiExtension
 */
class GeshiExtension extends AbstractExtensionAlias
{
    public function getTokenParsers()
    {
        return [
            new GeshiTokenParser(),
        ];
    }

    public function getName() {
        return 'geshi';
    }
}
