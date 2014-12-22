<?php

namespace hemio\html;

/**
 * The textarea element represents a multi-line plain-text edit control for
  the element’s raw value.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/
 */
class Textarea extends Abstract_\ElementContent implements Interface_\InputElement {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'textarea';
    }

}