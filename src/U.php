<?php

namespace hemio\html;

/**
 * The <code>u</code> element represents a span of text offset from its 
 * surrounding content without conveying any extra emphasis or importance, and 
 * for which the conventional typographic presentation is underlining; for 
 * example, a span of text in Chinese that is a proper name (a Chinese proper 
 * name mark), or span of text that is known to be misspelled.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-u-element
 */
class U extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'u';
    }

}
