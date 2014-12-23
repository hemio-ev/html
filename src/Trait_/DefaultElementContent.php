<?php

namespace hemio\html\Trait_;

/**
 * Default implementation of {@link MaintainsChilds}.
 * Accepts every {@link HtmlCode} as child (so basically everything)
 * @todo addChild might be addded to MaintainsChilds
 * 
 * @uses MaintainsChilds DefaultElementContent implements defaults for
 * more element specific methods (e.g. <code>isValidChild()</code>) required by MaintainsChilds
 * @author Michael Herold <quabla@hemio.de>
 */
trait DefaultElementContent {

    /**
     * @todo Needs addChildInternal() from trait ChildMaintainance
     */
    public function addChild(\hemio\html\Interface_\HtmlCode $child) {
        $this->addChildInternal($child);
        return $child;
    }

    /**
     * Returns always true
     * 
     * @param \html\Interface_\HtmlCode $child
     * @return boolean
     */
    public function isValidChild(\hemio\html\Interface_\HtmlCode $child) {
        return true;
    }

}
