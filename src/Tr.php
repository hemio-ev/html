<?php

namespace hemio\html;

/**
 * The <code>tr</code> element represents a row of cells in a table.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-tr-element
 */
class Tr extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'tr';
    }

}
