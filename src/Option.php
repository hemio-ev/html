<?php

namespace hemio\html;

/**
 * The <code>option</code> element represents an option in a select control, or an option
  in a labelled set of options grouped together in an optgroup, or an option
  among the list of suggestions in a datalist.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-option-element
 */
class Option extends Abstract_\ElementContent implements Interface_\ContentModelSelect {

    public static function tagName() {
        return 'option';
    }

    /**
     * 
     * @param string $strValue
     * @param Interface_\ContentModelText $objText
     */
    function __construct($strValue, Interface_\ContentModelText $objText) {
        $this->setAttribute('value', $strValue);
        $this->addChild($objText);
    }

    public function isValidChild(Interface_\HtmlCode $child) {
        return $child instanceof Interface_\ContentModelText;
    }

    /**
     * 
     * @param \html\Text $string
     * @return \html\Text
     */
    public function addChild(Interface_\ContentModelText $string) {
        $this->addChildInternal($string);
        return $string;
    }

}
