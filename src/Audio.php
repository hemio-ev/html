<?php

namespace hemio\html;

/**
 * An <code>audio</code> element represents an audio stream.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5//embedded-content-0.html#the-audio-element
 */
class Audio extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'audio';
    }

    public function blnIsBlock()
    {
        return true;
    }
}
