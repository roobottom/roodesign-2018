<?php

namespace Statamic\Addons\Paragraph;

use Statamic\Extend\Modifier;

class ParagraphModifier extends Modifier
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
      $start = strpos($value, '<p>');
      $end = strpos($value, '</p>', $start);
      $paragraph = substr($value, $start, $end-$start+4);
      return $paragraph;
    }
}
