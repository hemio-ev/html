<?php

namespace hemio\html;

/**
 * The <code>h1</code> through <code>h6</code> elements are headings for the
 * sections with which they are associated.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
class H2 extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'h2';
    }

    function blnIsBlock() {
        return true;
    }

}
