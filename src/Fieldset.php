<?php

namespace hemio\html;

/**
 * The <code>fieldset</code> element represents a set of form controls grouped under a
  common name.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-fieldset-element
 */
class Fieldset extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'fieldset';
    }

    public function blnIsBlock() {
        return true;
    }

}
