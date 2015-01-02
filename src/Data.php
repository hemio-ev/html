<?php

namespace hemio\html;

/**
 * The <code>data</code> element represents its contents, along with a machine-
 * readable form of those contents in the value attribute.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-data-element
 */
class Data extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'data';
    }

}
