<?php

namespace hemio\html;

/**
 * The <code>thead</code> element represents the block of rows that consist of the column
  labels (headings) for its parent table element.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-th-element
 */
class Thead extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'thead';
    }

}
