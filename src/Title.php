<?php

namespace hemio\html;

/**
 * The <code>title</code> element represents the document’s title or name.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/document-metadata.html#the-title-element
 */
class Title extends Abstract_\ElementContent implements Interface_\ContentModelMetadata {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'title';
    }

    public function isValidChild(Interface_\HtmlCode $objChild) {
        return $objChild instanceof Interface_\ContentModelText;
    }

}
