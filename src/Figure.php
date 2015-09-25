<?php

namespace hemio\html;

/**
 * The <code>figure</code> element represents a unit of content, optionally with
 * a caption, that is self-contained, that is typically referenced as a single
 * unit from the main flow of the document, and that can be moved away from the
 * main flow of the document without affecting the document’s meaning.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-figure-element
 */
class Figure extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'figure';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
