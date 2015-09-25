<?php

namespace hemio\html;

/**
 * The <code>header</code> element represents the header of a section. The header element can
 * also be used to wrap a section's table of contents, a search form, or any
 * relevant logos.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-header-element
 */
class Header extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'header';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
