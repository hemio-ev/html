<?php

namespace hemio\html;

namespace hemio\html;

/**
 * The <code>table</code> element represents a table; that is, data with more than one
  dimension.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5//tabular-data.html#the-table-element
 */
class Table extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'table';
    }

    public function blnIsBlock() {
        return true;
    }

}
