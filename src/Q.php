<?php

namespace hemio\html;

/**
 * The <code>q</code> element represents phrasing content quoted from another 
 * source.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-q-element
 */
class Q extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'q';
    }

}
