<?php

namespace hemio\html;

/**
 * The <code>blockquote</code> element represents a section that is quoted from another
  source.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-blockquote-element
 */
class Blockquote extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'blockquote';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
