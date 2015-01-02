<?php

namespace hemio\html;

/**
 * The <code>section</code> element represents a section of a document, typically with a
  title or heading.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-section-element
 */
class Section extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'section';
    }

    function blnIsBlock() {
        return true;
    }

}
