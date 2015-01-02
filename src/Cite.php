<?php

namespace hemio\html;

/**
 * The <code>cite</code> element represents the cited title of a work; for
 * example, the title of a book mentioned within the main text flow of a
 * document.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-cite-element
 */
class Cite extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'cite';
    }

}
