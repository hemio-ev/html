<?php

namespace hemio\html;

/**
 * The <code>output</code> element represents the result of a calculation.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-output-element
 */
class Output extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'output';
    }

    public function blnIsBlock() {
        return true;
    }

}
