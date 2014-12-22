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

    //public $arrOptions = array();
    /*
      public function addOption($strValue, $strText) {
      if (!isset($this->arrOptions[$strValue])) {
      return $this->arrOptions[$strValue] =
      new Option($strValue, $strText);
      } else {
      die('option allready exists');
      }
      }

      public function __toString() {
      foreach ($this->arrOptions as $objOption) {
      // TODO: selected für select ungelöst
      //$objOption->setAttribute('selected', 'selected');
      $this->objFormElem->addChild($objOption);
      }

      return parent::__toString();
      }
     */
}
