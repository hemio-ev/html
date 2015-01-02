<?php

namespace hemio\html;

/**
 * The <code>aside</code> element represents content that is tangentially
 * related to the content that forms the main textual flow of a document.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-aside-element
 */
class Aside extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'aside';
    }

    public function blnIsBlock() {
        return true;
    }

}
