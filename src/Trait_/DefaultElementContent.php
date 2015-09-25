<?php

namespace hemio\html\Trait_;

/**
 * Default implementation of {@link MaintainsChilds}.
 * Accepts every {@link HtmlCode} as child (so basically everything)
 *
 * @uses MaintainsChilds DefaultElementContent implements defaults for
 * more element specific methods (e.g. <code>isValidChild()</code>) required by MaintainsChilds
 * @author Michael Herold <quabla@hemio.de>
 */
trait DefaultElementContent
{

    /**
     * Used by addChild, therefore has to be defined here
     */
    abstract public function addChildInternal(\hemio\html\Interface_\HtmlCode $child);

    /**
     * This is not implemented in (@link ElementContent) since some elements
     * may only allow a restricted set of elements to be added as childs. This
     * is implemented via type hinting as feature for the API user.
     *
     * @param \hemio\html\Interface_\HtmlCode $child
     * @return \hemio\html\Interface_\HtmlCode
     */
    public function addChild(\hemio\html\Interface_\HtmlCode $child)
    {
        $this->addChildInternal($child);
        return $child;
    }

    /**
     * Returns always true
     *
     * @param \hemio\html\Interface_\HtmlCode $child
     * @return boolean
     */
    public function isValidChild(\hemio\html\Interface_\HtmlCode $child)
    {
        return true;
    }
}
