<?php

namespace hemio\html;

class String implements Interface_\ContentModelText {

    protected $strContent = '';

    function __construct($strContent) {
        $this->strContent = $strContent;
    }

    function __toString() {
        return htmlspecialchars($this->strContent);
    }

    public function setParent(Abstract_\ElementContent $objParent) {
        $this->objParent = $objParent;
    }

    
    public function describe() {
        return 'STRING';
    }
}
