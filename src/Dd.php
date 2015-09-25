<?php

namespace hemio\html;

/**
 * The <code>dd</code> element represents a description or value.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-dt-element
 * @todo check prev. element dt
 */
class Dd extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'dd';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
