<?php

namespace hemio\html;

/**
 * The <code>b</code> element represents a span of text offset from its
 * surrounding content without conveying any extra emphasis or importance, and
 * for which the conventional typographic presentation is bold text; for
 * example, keywords in a document abstract, or product names in a review.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-b-element
 */
class B extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'b';
    }
}
