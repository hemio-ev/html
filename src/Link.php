<?php

namespace hemio\html;

/**
 * The <code>link</code> element represents metadata that expresses inter-
 * document relationships.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/document-metadata.html#the-link-element
 */
class Link extends Abstract_\ElementEmpty implements Interface_\ContentModelMetadata {

    public static function tagName() {
        return 'link';
    }

}
