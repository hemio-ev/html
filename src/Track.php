<?php

namespace hemio\html;

/**
 * The <code>track</code> element enables supplementary media tracks such as 
 * subtitle tracks and caption tracks to be specified for audio and video 
 * elements.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-track-element
 */
class Track extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'track';
    }

}
