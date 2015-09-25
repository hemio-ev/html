<?php

namespace hemio\html;

class Str implements Interface_\ContentModelText
{

    use Trait_\HooksToString;
    protected $strContent = '';

    function __construct($content)
    {
        $this->strContent = $content;
    }

    public function setValue($content)
    {
        $this->strContent = $content;
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
