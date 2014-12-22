<?php

namespace hemio\html;

/**
 * The <code>a</code> element represents a hyperlink.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-a-element
 */
class A extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'a';
    }

}
