<?php

namespace hemio\html;

/**
 * The <code>dl</code> element represents a description list.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-dl-element
 */
class Dl extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'dl';
    }

    public function blnIsBlock() {
        return true;
    }

}
