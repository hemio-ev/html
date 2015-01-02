<?php

namespace hemio\html\Interface_;

/**
 * The text content model represents <i>Text nodes</i>. Text nodes must consist
 * of Unicode characters, must not contain U+0000 characters, must not contain
 * permanently undefined Unicode characters (noncharacters), and must not
 * contain control characters other than space characters.
 *
 * @url http://www.w3.org/TR/html5/dom.html#text-content
 * @author Michael Herold <quabla@hemio.de>
 */
interface ContentModelText extends ContentModel {

    /**
     * @return string
     */
    public function __toString();
}
