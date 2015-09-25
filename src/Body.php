<?php

namespace hemio\html;

/**
 * The <code>body</code> element represents the body of a document (as opposed to the
  document’s metadata).
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-body-element
 */
class Body extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'body';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
