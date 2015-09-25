<?php

namespace hemio\html;

/**
 * The <code>sup</code> element represents superscript.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-sub-and-sup-elements
 */
class Sup extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'sup';
    }
}
