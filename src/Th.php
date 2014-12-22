<?php

namespace hemio\html;

/**
 * The <code>th</code> element represents a header cell in a table.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-th-element
 */
class Th
        extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'th';
    }

    function __construct(Interface_\HtmlCode $objContent = null) {
        if ($objContent !== null) $this->addChild($objContent);
    }

}
