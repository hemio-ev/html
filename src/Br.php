<?php

namespace hemio\html;

/**
 * The br element represents a line break.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-br-element
 */
class Br extends Abstract_\ElementEmpty
{

    public static function tagName()
    {
        return 'br';
    }
}
