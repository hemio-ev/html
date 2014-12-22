<?php

namespace hemio\html;

/**
 * The <code>tr</code> element represents a row of cells in a table.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-tr-element
 */
class Tr extends Abstract_\ElementContent {
    /*
      private $objTable;
      private $arrSpan = array();
      public $arrField = array();
      public $blnHeadRow = false;

     */

use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'tr';
    }

    function __construct(/* TableBin $objTable, array $arrSpan = array(),
      $blnHeadRow = false */) {
        //$this->setTag('tr');
        /*
          $this->objTable = $objTable;
          $this->arrSpan = $arrSpan;
          $this->blnHeadRow = $blnHeadRow;

          parent::__construct('tr');

          $this->arrInit();
         */
    }

    /*
      public function arrInit() {
      $intSpanned = 0;
      foreach ($this->arrSpan as $intSpan) {
      $intSpanned += $intSpan - 1;
      }

      for ($i = 0; $i < ($this->objTable->intCols - $intSpanned); $i++) {
      if ($this->blnHeadRow) {
      $this->arrField[$i] = $this->addChild(new Th);
      } else {
      $this->arrField[$i] = $this->addChild(new Td);
      }

      if (isset($this->arrSpan[$i]) && $this->arrSpan[$i] > 1) {
      $this->arrField[$i]
      ->setAttribute('colspan', $this->arrSpan[$i]);
      }
      }
      }

      public function addChildTo($intField, HtmlCode $objChild) {
      $this->arrField[$intField]->addChild($objChild);
      }
     */

    /*
      public function addField($objContent, $intSpan = 1) {
      if ($objTable instanceof Thead) {
      $objField = $this->addChild(new Th($objContent));
      }
      else {
      $objField = $this->addChild(new Td($objContent));
      }

      if ($intSpan>1) {
      $objField->setAttribute('colspan', $intSpan);
      }

      }
     */
}
