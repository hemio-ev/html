<?php

namespace hemio\html;

/**
 * The <code>td</code> element represents a data cell in a table.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-td-element
 */
class Td extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'td';
    }

    function __construct(Interface_\HtmlCode $objContent = null) {
        if ($objContent !== null) $this->addChild($objContent);
    }

}
