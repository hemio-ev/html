<?php

namespace hemio\html;

/**
 * The <code>form</code> element represents a user-submittable form.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-form-element
 */
class Form extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'form';
    }

    public function blnIsBlock() {
        return true;
    }

}
