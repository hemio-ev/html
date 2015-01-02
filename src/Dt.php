<?php

namespace hemio\html;

/**
 * The <cdoe>dt</code> element represents a term or name in a description list
 * ({@link Dl}).
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-dl-element
 */
class Dt extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'dt';
    }

}
