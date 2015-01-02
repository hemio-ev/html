<?php

namespace hemio\html;

/**
 * The <code>samp</code> element represents (sample) output from a program or
 * computing system.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-samp-element
 */
class Samp extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'samp';
    }

}
