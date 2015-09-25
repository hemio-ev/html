<?php

namespace hemio\html;

/**
 * The img element represents an image.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-img-element
 */
class Img extends Abstract_\ElementEmpty
{

    public function __construct($url = null, $alt = null)
    {
        if ($url !== null) {
            $this->setAttribute('src', $url);
        }
        if ($alt !== null) {
            $this->setAttribute('alt', $alt.' ');
        }
    }

    public static function tagName()
    {
        return 'img';
    }
}
