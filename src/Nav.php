<?php

namespace hemio\html;

/**
 * The <code>nav</code> element represents a section of a document that links to other
  documents or to parts within the document itself; that is, a section of
  navigation links.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-nav-element
 */
class Nav extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'nav';
    }

}
