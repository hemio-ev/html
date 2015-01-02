<?php

namespace hemio\html;

/**
 * The <code>small</code> element represents so-called 'fine print' or 'small
 * print', such as legal disclaimers and caveats.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-small-element
 */
class Small extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'small';
    }

}
