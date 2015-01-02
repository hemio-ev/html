<?php

namespace hemio\html;

/**
 * The <code>dfn</code> element represents the defining instance of a term.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-dfn-element
 */
class Dfn extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'dfn';
    }

}
