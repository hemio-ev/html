<?php

namespace hemio\html;

/**
 * The <code>ul</code> element represents an unordered list of items; that is, a list in
  which changing the order of the items would not change the meaning of list.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/grouping-content.html#the-ul-element
 */
class Ul extends Abstract_\ElementContent {

    use Trait_\Lists;

    public function blnIsBlock() {
        return true;
    }

    public function __toString() {
        if ($this->count() > 0)
            return parent::__toString();
        else
            return '';
    }

    public static function tagName() {
        return 'ul';
    }

    public function addLine(Interface_\HtmlCode $child) {
        $li = $this->addChild(new Li());
        $li->addChild($child);
        return $li;
    }

}
