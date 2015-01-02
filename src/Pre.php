<?php

namespace hemio\html;

/**
 * The <code>pre</code> element represents a block of preformatted text, in which structure
  is represented by typographic conventions rather than by elements.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-pre-element
 */
class Pre extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'pre';
    }

    public function blnIsBlock() {
        return true;
    }

}
