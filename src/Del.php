<?php

namespace hemio\html;

/**
 * The <code>del</code> element represents a range of text that has been deleted
 * from a document.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/edits.html#the-del-element
 */
class Del extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'del';
    }
}
