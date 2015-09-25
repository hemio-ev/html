<?php

namespace hemio\html;

/**
 * The <code>bdi</code> element represents a span of text that is isolated from
 * its surroundings for the purposes of bidirectional text formatting [BIDI].
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-bdi-element
 */
class Bdi extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'bdi';
    }
}
