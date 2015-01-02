<?php

namespace hemio\html;

/**
 * The <code>wbr</code> element represents a line-break opportunity.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-wbr-element
 */
class Wbr extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'wbr';
    }

}
