<?php

namespace hemio\html;

/**
 * The <code>video</code> element represents a video or movie.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-video-element
 */
class Video extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'video';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
