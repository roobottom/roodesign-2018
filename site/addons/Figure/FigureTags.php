<?php

namespace Statamic\Addons\Figure;

use Statamic\Extend\Tags;
use Statamic\API\Asset;

class FigureTags extends Tags
{
    public function index()
    {
        $targetSet = $this->getParam('set');
        return $this->figureTag($targetSet);
    }


    private function figureTag($targetSet) {
      $tag;

      foreach($this->context['asset_sets'] as $set)
      {
        if($set['name'] == $targetSet)
        {
          if(count($set['assets']) > 1)
          {
            $class = "figure figure--gallery figure--gallery-". count($set['assets']) ." figure--w-".$set['width'];
          }
          else
          {
            $class = "figure figure--w-".$set['width'];
          }
          $tag = "<figure class='$class'>";
          foreach($set['assets'] as $file)
          {
            $asset = Asset::wherePath(ltrim($file, '/'));
            $settings = ['w'=>1200];
            $tag .= "<img src='".$asset->manipulate($settings)."' class='figure__image' data-width='".$asset->width()."' data-height='".$asset->height()."' />";

          }
          if($set['caption'])
          {
            $tag .= "<figcaption class='figure__caption'>".$set['caption']."</figcaption>";
          }
          $tag .= "</figure>";
        }
      }

      return $tag;
    }

}
