<?php

namespace hemio\html;

/**
 * The <code>s</code> element represents contents that are no longer accurate or
 * no longer relevant and that therefore has been 'struck' from the document.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-s-element
 */
class S extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 's';
    }
}
