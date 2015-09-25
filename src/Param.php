<?php

namespace hemio\html;

/**
 * The <code>param</code> element defines parameters for plugins invoked by
 * object elements.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-param-element
 */
class Param extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'param';
    }
}
