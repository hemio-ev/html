<?php

namespace hemio\html;

/**
 * The <code>embed</code> element represents an integration point for external 
 * content.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-embed-element
 */
class Embed extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'embed';
    }

}
