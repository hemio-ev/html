<?php

namespace hemio\html;

/**
 * The <code>li</code> element represents a list item.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-li-element
 */
class Li extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'li';
    }

}
