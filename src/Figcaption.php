<?php

namespace hemio\html;

/**
 * The <code>figcaption</code> element represents a caption or legend for a figure.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-figcaption-element
 */
class Figcaption extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'figcaption';
    }

    public function blnIsBlock() {
        return true;
    }

}
