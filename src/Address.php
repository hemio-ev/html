<?php

namespace hemio\html;

/**
 * The <code>address</code> element represents contact information.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-address-element
 */
class Address extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'address';
    }

    public function blnIsBlock() {
        return true;
    }

}
