<?php

namespace hemio\html;

/**
 * The <code>optgroup</code> element represents a group of option elements with
 *  a common label.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-optgroup-element
 */
class Optgroup extends Abstract_\ElementContent implements Interface_\ContentModelSelect {

    public static function tagName() {
        return 'optgroup';
    }

    /**
     * 
     * @param \html\Option $option
     * @return Option
     */
    public function addChild(Option $option) {
        return $this->addChildInternal($option);
    }

    /**
     * 
     * @param \html\Interface_\HtmlCode $child
     * @return boolean
     */
    public function isValidChild(Interface_\HtmlCode $child) {
        return $child instanceof Option;
    }

}
