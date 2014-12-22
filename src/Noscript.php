<?php

namespace hemio\html;

/**
 * The <code>noscript</code> element is used to present different markup to user
 * agents that don’t support scripting, by affecting how the document is parsed.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/scripting-1.html#the-noscript-element
 */
class Noscript extends Abstract_\ElementContent implements Interface_\ContentModelMetadata {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'noscript';
    }

    public function blnIsBlock() {
        return true;
    }

}
