<?php

namespace hemio\html;

/**
 * The <code>em</code> element represents a span of text with emphatic stress.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-em-element
 */
class Em extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'em';
    }

}
