<?php

namespace hemio\html\Trait_;

trait Lists {

    /**
     * 
     * @param \hemio\html\Li $child
     * @return \hemio\html\Li
     */
    public function addChild(\hemio\html\Li $child) {
        $this->addChildInternal($child);
        return $child;
    }

    /**
     * Adds <<li>> tag containing a given entry
     * 
     * @param Interface_\HtmlCode $withEntry The contained entry
     * @return \hemio\html\Li
     */
    public function addEntryWith(\hemio\html\Interface_\HtmlCode $withEntry) {
        $li = new \hemio\html\Li();
        $li->addChild($withEntry);
        return $this->addChild($li);
    }

    /**
     * 
     * @param \hemio\html\Interface_\HtmlCode $header
     * @return \hemio\html\Ul
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
     * @param \hemio\html\Interface_\HtmlCode $header
     * @return \hemio\html\Ol
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

    /**
     * Used by addChild, therefore has to be defined here
     */
    abstract public function addChildInternal(\hemio\html\Interface_\HtmlCode $child);
}
