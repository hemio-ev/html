<?php

namespace hemio\html\Abstract_;

abstract class Element implements \hemio\html\Interface_\HtmlCode, \hemio\html\Interface_\MaintainsAppendages, \hemio\html\Interface_\ElementTag {

    use \hemio\html\Trait_\AppendageMaintainance;

    /**
     * parent element in DOM or something similar
     * @var \hemio\html\Interface_\MaintainsChilds
     */
    public $objParent = null;

    /**
     * atributes like 'type' => 'text' in <input type="text" />
     * @var array
     */
    protected $arrAttributes = array();

    /**
     * activated CSS classes like 'my_css_class' => true
     * @var array
     */
    protected $arrCssClasses = array();

    /**
     * concrete CSS options like 'color'=>'green' (please prefer CSS classes!)
     * @var array
     */
    protected $arrCssPropertys = array();

    /**
     * sets an antribute
     * @param string $strKey
     * @param mixed $mixValue
     */
    public function setAttribute($strKey, $mixValue) {
        if ($mixValue === true)
            $mixValue = $strKey;
        else if ($mixValue === false)
            $mixValue = '';

        $this->arrAttributes[$strKey] = $mixValue;
    }

    /**
     *
     * @param string $strKey
     */
    public function getAttribute($strKey) {
        return array_key_exists($strKey, $this->arrAttributes) ? $this
                ->arrAttributes[$strKey] : '';
    }

    /**
     * @param string $strClassName
     */
    public function addCssClass($strClassName) {
        if ($strClassName != '') {
            $this->arrCssClasses[$strClassName] = true;
        }
    }

    /**
     *
     * @param string $strClassName
     */
    public function removeCssClass($strClassName) {
        if (isset($this->arrCssClasses[$strClassName])) {
            unset($this->arrCssClasses[$strClassName]);
        }
    }

    /**
     * @param string $strKey
     * @param mixed $mixValue
     */
    public function setCssProperty($strKey, $mixValue) {
        $this->arrCssPropertys[$strKey] = $mixValue;
    }

    /**
     * @param string $strId
     */
    public function setId($strId) {
        $this->setAttribute('id', $strId);
    }

    /**
     * writes the style collected css styles and classes into the style atribute
     */
    protected function generateStyleAttribute() {
        // combine CSS classes
        $strClasses = '';
        foreach ($this->arrCssClasses as $strClass => $NULL) {
            if ($strClass != '')
                $strClass .= ' ';
            $strClasses .= $strClass;
        }
        $this->setAttribute('class', $strClasses);

        // combine CSS propertys
        $strPropertys = '';
        foreach ($this->arrCssPropertys as $strProperty => $strValue) {
            if ($strPropertys != '')
                $strPropertys .= ' ';
            $strPropertys .= $strProperty . ': ' . $strValue . ';';
        }
        $this->setAttribute('style', $strPropertys);
    }

    /**
     * Returns what deemed to be the final atributes string
     * @return string
     */
    protected function getFormattedElementAttributes() {
        $strOptions = '';
        $this->generateStyleAttribute();

        foreach ($this->arrAttributes as $strKey => $strVal)
            if ($strVal !== '')
                $strOptions .= sprintf(
                        ' %s="%s"', htmlspecialchars($strKey, ENT_QUOTES | ENT_XHTML), htmlspecialchars($strVal, ENT_QUOTES | ENT_XHTML)
                );

        return $strOptions;
    }

    /**
     * Sets the parent HTML element.
     * Will be called while iterrating through __toString()
     * @param \hemio\html\Interface_\MaintainsChilds $objParent
     */
    public function setParent(\hemio\html\Interface_\MaintainsChilds $objParent) {
        $this->objParent = $objParent;
    }

    public function describe() {
        return $this->tagName();
    }

}
