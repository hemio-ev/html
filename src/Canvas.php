<?php

namespace hemio\html;

/**
 * The <code>canvas</code> element represents a resolution-dependent bitmap canvas, which
  can be used for dynamically rendering of images such as game graphics,
  graphs, or other images.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-canvas-element
 */
class Canvas extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'canvas';
    }

    public function blnIsBlock() {
        return true;
    }

}
