<?php

namespace hemio\html;

/**
 * The <code>ins</code> element represents a range of text that has been
 * inserted (added) to a document.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/edits.html#the-ins-element
 */
class Ins extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'ins';
    }

}
