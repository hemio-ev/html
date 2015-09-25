<?php

namespace hemio\html;

/**
 * The <code>div</code> element is a generic container for flow content that by itself does
  not represent anything.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-div-element
 */
class Div extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'div';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
