<?php

namespace hemio\html;

/**
 * The <code>col</code> element represents one or more columns in the column
 * group represented by its colgroup parent.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-col-element
 */
class Col extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'col';
    }

}
