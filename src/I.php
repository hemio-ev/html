<?php

namespace hemio\html;

/**
 * The <code>i</code> element represents a span of text offset from its
 * surrounding content without conveying any extra emphasis or importance, and
 * for which the conventional typographic presentation is italic text; for
 * example, a taxonomic designation, a technical term, an idiomatic phrase from
 * another language, a thought, or a ship name.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-i-element
 */
class I extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'i';
    }

}
