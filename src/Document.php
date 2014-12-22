<?php

namespace hemio\html;

/**
 * 
 *
 */
class Document implements Interface_\HtmlCode, Interface_\MaintainsChilds {

    use Trait_\ChildMaintainance,
        Trait_\AppendageMaintainance;

    public function __construct(Interface_\ContentModelText $objTitleContent) {
        $this['_HTML'] = new Html($objTitleContent);
    }

    public function __toString() {
        return '<!DOCTYPE html>' . PHP_EOL . $this['_HTML'];
    }

    /**
     * 
     * @return \html\Html
     */
    public function getHtml() {
        return $this['_HTML'];
    }

    public function isValidChild(Interface_\HtmlCode $child) {
        return $child instanceof Html;
    }

    
    public function describe() {
        return __CLASS__.__NAMESPACE__;
    }
}
