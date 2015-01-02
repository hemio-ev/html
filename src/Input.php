<?php

namespace hemio\html;

/**
 * The <code>input</code> element represents a typed data field, usually with a form control
 * to allow the user to edit the data.
 *
 * @since 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-input-element
 */
class Input extends Abstract_\ElementEmpty implements Interface_\Submittable {

    use Trait_\Submittable;

    /**
     *
     * @param string $type
     */
    public function __construct($type = null) {
        if ($type !== null)
            $this->setAttribute('type', $type);
    }

    public static function tagName() {
        return 'input';
    }

}
