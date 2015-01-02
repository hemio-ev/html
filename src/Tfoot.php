<?php

namespace hemio\html;

/**
 * The <code>tfoot</code> element represents the block of rows that consist of the column
  summaries (footers) for its parent table element.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-tfoot-element
 */
class Tfoot extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'tfoot';
    }

    public function blnIsBlock() {
        return true;
    }

}
