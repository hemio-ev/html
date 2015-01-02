<?php

namespace hemio\html;

/**
 * The <code>rt</code> element marks the ruby text component of a ruby 
 * annotation.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-rt-element
 */
class Rt extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'rt';
    }

}
