<?php

namespace hemio\html;

/**
 * The <code>select</code> element represents a control for selecting among a list of
  options.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-select-element
 */
class Select extends Abstract_\ElementContent implements Interface_\FormControl {

    public static function tagName() {
        return 'select';
    }

    public function isValidChild(Interface_\HtmlCode $child) {
        return $child instanceof Interface_\ContentModelSelect;
    }

    public function addChild(Interface_\ContentModelSelect $child) {
        $this->addChildInternal($child);
        return $child;
    }

}
