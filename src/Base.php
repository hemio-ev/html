<?php

namespace hemio\html;

/**
 * The <code>base</code> element specifies a document-wide base URL for the 
 * purposes of resolving relative URLs, and a document-wide default browsing 
 * context name for the purposes of following hyperlinks.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/document-metadata.html#the-base-element
 */
class Base extends Abstract_\ElementEmpty implements Interface_\ContentModelMetadata {

    public static function tagName() {
        return 'base';
    }

}
