<?php

namespace hemio\html\Trait_;

trait Lists {

    /**
     * 
     * @param \html\Li $child
     * @return \html\Li
     */
    public function addChild(\hemio\html\Li $child) {
        $this->addChildInternal($child);
        return $child;
    }

    /**
     * Adds <<li>> tag containing a given entry
     * 
     * @param Interface_\HtmlCode $withEntry The contained entry
     * @return html\Li
     */
    public function addEntryWith(\hemio\html\Interface_\HtmlCode $withEntry) {
        $li = new \hemio\html\Li();
        $li->addChild($withEntry);
        return $this->addChild($li);
    }

    /**
     * 
     * @param \html\Interface_\HtmlCode $header
     * @return \html\Ul
     */
    public function addSubUl(\hemio\html\Interface_\HtmlCode $header) {
        $li = $this->addChild(new \hemio\html\Li);
        $li->addChild($header);
        $newList = new \hemio\html\Ul();
        $li->addChild($newList);
        return $newList;
    }

    /**
     * 
     * @param \html\Interface_\HtmlCode $header
     * @return \html\Ol
     */
    public function addSubOl(\hemio\html\Interface_\HtmlCode $header) {
        $li = $this->addChild(new \hemio\html\Li);
        $li->addChild($header);
        $newList = new \hemio\html\Ol();
        $li->addChild($newList);
        return $newList;
    }

    public function isValidChild(\hemio\html\Interface_\HtmlCode $child) {
        return $child instanceof \hemio\html\Li;
    }

}