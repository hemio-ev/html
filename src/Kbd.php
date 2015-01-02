<?php

namespace hemio\html;

/**
 * The kbd element represents user input.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-kbd-element
 */
class Kbd extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'kbd';
    }

}
