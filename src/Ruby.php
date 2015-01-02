<?php

namespace hemio\html;

/**
 * The <code>ruby</code> element allows spans of phrasing content to be marked 
 * with ruby annotations.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-ruby-element
 */
class Ruby extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'ruby';
    }

}
