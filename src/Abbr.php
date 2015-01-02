<?php

namespace hemio\html;

/**
 * The <code>abbr</code> element represents an abbreviation or acronym.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-abbr-element
 */
class Abbr extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'abbr';
    }

}
