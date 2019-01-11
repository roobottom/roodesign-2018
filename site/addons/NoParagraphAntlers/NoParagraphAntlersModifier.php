<?php

namespace Statamic\Addons\NoParagraphAntlers;

use Statamic\Extend\Modifier;

class NoParagraphAntlersModifier extends Modifier
{
    /**
     * Modify a value
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $pattern = '/(<p>)({{(.*?)}})(<\/p>)/i';
        $replacement = '$2';
        return preg_replace($pattern, $replacement, $value);
    }
}
