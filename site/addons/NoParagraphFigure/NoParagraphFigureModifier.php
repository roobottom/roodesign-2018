<?php

namespace Statamic\Addons\NoParagraphFigure;

use Statamic\Extend\Modifier;

class NoParagraphFigureModifier extends Modifier
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
        $pattern = '/(<p>\s*<figure)(.+?)(<\/figure>\s*<\/p>)/i';
        $replacement = '<figure$2</figure>';
        return preg_replace($pattern, $replacement, $value);
    }
}
