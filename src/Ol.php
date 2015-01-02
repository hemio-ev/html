<?php

namespace hemio\html;

/**
 * The <code>ol</code> element represents a list (or sequence) of items; that is, a list in
  which the items are intentionally ordered, such that changing the order
  would change the meaning of the list.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-ol-element
 */
class Ol extends Abstract_\ElementContent {

    use Trait_\Lists;

    public static function tagName() {
        return 'ol';
    }

    public function blnIsBlock() {
        return true;
    }

}
