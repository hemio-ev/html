<?php

namespace hemio\html;

/**
 * The <code>span</code> element is a generic wrapper for phrasing content that by itself
  does not represent anything.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-span-element
 */
class Span extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'span';
    }
}
