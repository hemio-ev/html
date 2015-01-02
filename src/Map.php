<?php

namespace hemio\html;

/**
 * The <code>map</code> element, in conjunction with any area element
 * descendants, defines an image map.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-map-element
 */
class Map extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'map';
    }

}
