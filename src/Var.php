<?php

namespace hemio\html;

/**
 * The <code>var</code> element represents either a variable in a mathematical
 * expression or programming context, or placeholder text that the reader is
 * meant to mentally replace with some other literal value.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-var-element
 */
class Variable extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'var';
    }
}
