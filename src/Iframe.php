<?php

namespace hemio\html;

/**
 * The <code>iframe</code> element introduces a new nested browsing context.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-iframe-element
 */
class Iframe extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'iframe';
    }
}
