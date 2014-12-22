<?php

namespace hemio\html;

/**
 * The <code>html</code> element represents the root of a document.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/semantics.html#the-html-element
 */
class Html extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'html';
    }

    function __construct(Interface_\ContentModelText $objTitleContent) {
        $this['_HEAD'] = new Head($objTitleContent);
        $this['_BODY'] = new Body();
    }

    /**
     * 
     * @return Head
     */
    public function getHead() {
        return $this['_HEAD'];
    }

    /**
     * 
     * @param \html\Head $objHead
     */
    public function setHead(Head $objHead) {
        $this['_HEAD'] = $objHead;
    }

    /**
     * 
     * @return Body
     */
    public function getBody() {
        return $this['_BODY'];
    }

    /**
     * 
     * @param \html\Body $objBody
     */
    public function setBody(Body $objBody) {
        $this['_BODY'] = $objBody;
    }

    public function blnIsBlock() {
        return true;
    }

}
