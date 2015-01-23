<?php

namespace hemio\html\Interface_;

/**
 * Html elements which can have child elements (e.g. {@link ElementContent}) or
 *  elements which collect elements (e.g. {@link \form\Container}).
 *
 * @author Michael Herold <quabla@hemio.de>
 */
interface MaintainsChilds extends \ArrayAccess, \RecursiveIterator, \Countable,
 MaintainsAppendages {

    /**
     * Some HTML elements may only have specific childs and the should implement
     * a validation using this function. Other object may allways return true
     * like the widely used implementation {@link DefaultElementContent}.
     * The validity is often checked using content models
     * (see {@link ContentModel}).
     */
    public function isValidChild(HtmlCode $child);

    /**
     * 
     * @param \hemio\html\Interface_\callable $selectFilter
     */
    public function getRecursiveIterator(callable $selectFilter = null);
}
