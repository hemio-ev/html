<?php

namespace hemio\html;

/**
 * The <code>hr</code> element represents a paragraph-level thematic break.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-hr-element
 */
class Hr extends Abstract_\ElementEmpty {

    public static function tagName() {
        return 'hr';
    }

    public function blnIsBlock() {
        return true;
    }

}
