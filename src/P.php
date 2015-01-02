<?php

namespace hemio\html;

/**
 * The <code>p</code> element represents a paragraph.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-p-element
 */
class P extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'p';
    }

    function __construct(Interface_\HtmlCode $objChild = null) {
        if ($objChild)
            $this->addChild($objChild);
    }

    public function blnIsBlock() {
        return true;
    }

}
