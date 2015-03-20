<?php

namespace hemio\html;

class String implements Interface_\ContentModelText
{

    use Trait_\HooksToString;
    protected $strContent = '';

    function __construct($strContent)
    {
        $this->strContent = $strContent;
    }

    function __toString()
    {
        foreach ($this->hooksToString as $hook)
            $hook($this);

        return htmlspecialchars($this->strContent);
    }

    public function setParent(Abstract_\ElementContent $objParent)
    {
        $this->objParent = $objParent;
    }

    public function describe()
    {
        return 'STRING';
    }
}
