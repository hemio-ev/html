<?php

namespace hemio\html;

/**
 * The <code>code</code> element represents a fragment of computer code.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-code-element
 */
class Code extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'code';
    }

}
