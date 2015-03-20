<?php

namespace hemio\html;

/**
 *
 *
 */
class Document implements Interface_\HtmlCode, Interface_\MaintainsChilds
{

    use Trait_\AppendageMaintainance,
        Trait_\ChildMaintainance,
        Trait_\HooksToString;

    public function __construct(Interface_\ContentModelText $objTitleContent)
    {
        $this['_HTML'] = new Html($objTitleContent);
    }

    public function __toString()
    {
        foreach ($this->hooksToString as $hook)
            $hook($this);

        return '<!DOCTYPE html>'.PHP_EOL.$this['_HTML']->__toString();
    }

    /**
     *
     * @return Html
     */
    public function getHtml()
    {
        return $this['_HTML'];
    }

    public function isValidChild(Interface_\HtmlCode $child)
    {
        return $child instanceof Html;
    }

    public function describe()
    {
        return __CLASS__;
    }
}
