<?php

namespace hemio\html;

/**
 * The <code>meta</code> element represents various kinds of metadata that cannot be
 * expressed using the title, base, link, style, and script elements.
 *
 * @url http://www.w3.org/TR/html5/document-metadata.html#the-meta-element
 * @since 1.0
 */
class Meta extends Abstract_\ElementEmpty implements Interface_\ContentModelMetadata {

    public static function tagName() {
        return 'meta';
    }

}
