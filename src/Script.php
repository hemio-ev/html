<?php

namespace hemio\html;

/**
 * The <code>script</code> element enables dynamic script and data blocks to be
 * included in documents.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/scripting-1.html#the-script-element
 */
class Script extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'script';
    }

}
