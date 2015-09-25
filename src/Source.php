<?php

namespace hemio\html;

/**
 * The <code>source</code> element enables multiple media sources to be
 * specified for audio and video elements.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-source-element
 */
class Source extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'source';
    }
}
