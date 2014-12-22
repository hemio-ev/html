<?php

namespace hemio\html;

/**
 * The <code>label</code> element represents a caption for a form control.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-label-element
 */
class Label extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'label';
    }

}
