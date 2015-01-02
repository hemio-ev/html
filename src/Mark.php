<?php

namespace hemio\html;

/**
 * The <code>mark</code> element represents a run of text in one document marked 
 * or highlighted for reference purposes, due to its relevance in another   
 * context.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-mark-element
 */
class Mark extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'mark';
    }

}
