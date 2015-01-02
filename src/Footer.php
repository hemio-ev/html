<?php

namespace hemio\html;

/**
 * The <code>footer</code> element represents the footer for the section it applies to.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-footer-element
 */
class Footer extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'footer';
    }

    public function blnIsBlock() {
        return true;
    }

}
