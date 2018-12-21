<?php

namespace Statamic\Addons\EmptyParagraph;

use Statamic\Extend\Modifier;
use DOMDocument;

//THIS DOESN"T FUCKING WORK!!!!

class EmptyParagraphModifier extends Modifier
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
        
        $pattern = '/(<p>)({{(.*)+}})(<\/p>)/im';
        $replacement = '$2';
        return preg_replace($pattern, $replacement, $value);
        // $dom = new DOMDocument();
        // $dom->loadHTML($value);
        // $dom->preserveWhiteSpace = false;
        // $paragraphs = $dom->getElementsByTagName('p');

        // $nodesToModify=array();
        
        // foreach($paragraphs as $p) {
        //     if(strpos($p->nodeValue, '{{') !== false ) {
        //         $fragment = $dom->createDocumentFragment();
        //         $fragment->appendXML($p->textContent);
        //         echo($p->textContent);
        //         $dom->replaceChild($fragment,$p);
        //     }
        // }

        // $dom->saveHTML;
        
        //return 'empty'.$value;
    }
}
