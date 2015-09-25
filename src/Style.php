<?php

namespace hemio\html;

/**
 * The <code>style</code> element allows style information to be embedded in
 * documents.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/document-metadata.html#the-style-element
 */
class Style extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'style';
    }
}
