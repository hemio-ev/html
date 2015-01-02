<?php

namespace hemio\html;

/**
 * The <code>caption</code> element represents the title of the table that is
 * its parent.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-caption-element
 */
class Caption extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'caption';
    }

}
