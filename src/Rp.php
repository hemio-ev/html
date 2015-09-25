<?php

namespace hemio\html;

/**
 * The <code>rp</code> element can be used to provide parentheses around a ruby
 * text component of a ruby annotation, to be shown by UAs that don’t support
 * ruby annotations.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-rp-element
 */
class Rp extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'rp';
    }
}
