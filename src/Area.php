<?php

namespace hemio\html;

/**
 * The <code>area</code> element represents either a hyperlink with some text
 * and a corresponding area on an image map, or a dead area on an image map.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-area-element
 */
class Area extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'area';
    }

}
