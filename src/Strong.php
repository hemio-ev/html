<?php

namespace hemio\html;

/**
 * The <code>strong</code> element represents a span of text with strong 
 * importance.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-strong-element
 */
class Strong extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'strong';
    }

}
