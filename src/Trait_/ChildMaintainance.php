<?php

namespace hemio\html\Trait_;

/**
 * Most required utils to implement elements that can have childs and 
 * containers. Recomended implementation from most of 
 * {@link MaintainsChilds} requirements.
 * 
 * @uses MaintainsChilds ChildMaintainance is the recommended 
 * implementation from most of MaintainsChilds requirements
 * @author Michael Herold <quabla@hemio.de>
 * @todo Cleanup
 */
trait ChildMaintainance {

    /**
     * child elemnts of the element
     * @var array
     */
    private $arrChilds = array();

    /**
     * 
     * @return integer
     */
    public function count() {
        return count($this->arrChilds);
    }

    /**
     * 
     * @param mixed $offset
     * @return boolean
     */
    public function offsetExists($offset) {
        return array_key_exists($offset, $this->arrChilds);
    }

    /**
     * 
     * @param mixed $offset
     * @return Interface_\HtmlCode
     */
    public function offsetGet($offset) {
        return $this->arrChilds[$offset];
    }

    /**
     * 
     * @param mixed $offset
     * @param Interface_\HtmlCode $value
     */
    public function offsetSet($offset, $value) {
        if ($this->isValidChild($value)) {
            if ($offset === null)
                $this->arrChilds[] = $value;
            else
                $this->arrChilds[$offset] = $value;

            $this->gainChild($value);
        } else {
            trigger_error('An instance of `' . get_class($value) .
                    '` is no valid child for `' . get_class() . '`', E_USER_WARNING);
        }
    }

    /**
     * 
     * @param type $offset
     */
    public function offsetUnset($offset) {
        unset($this->arrChilds[$offset]);
    }

    /**
     * Implements iteration
     * 
     * @return \Traversable
     */
    public function getIterator() {
        return new \ArrayIterator($this->arrChilds);
    }

    /**
     * 
     * @param \hemio\html\Interface_\HtmlCode $child
     * @return \hemio\html\Interface_\HtmlCode
     */
    protected function addChildInternal(\hemio\html\Interface_\HtmlCode $child) {
        $this[] = $child;
        return $child;
    }

    /**
     * 
     * @param \hemio\html\Interface_\HtmlCode $child
     */
    protected function gainChild(\hemio\html\Interface_\HtmlCode $child) {
        if ($child instanceof \hemio\html\Abstract_\Element)
            $child->setParent($this);

        if ($child instanceof \hemio\html\Interface_\MaintainsAppendages)
            foreach ($this->getInheritableAppendages() as $appKey => $appValue)
                $child->leaveInheritableAppendage($appKey, $appValue);
    }

    public function __clone() {
        foreach ($this->arrChilds as $key => $child) {
            $this->arrChilds[$key] = clone $child;
        }
    }

    public function valid() {
        return current($this->arrChilds) !== false;
    }

    public function hasChildren() {
        return $this->current() instanceof \RecursiveIterator;
    }

    public function next() {
        next($this->arrChilds);
    }

    public function current() {
        return current($this->arrChilds);
    }

    public function getChildren() {
        return $this->current();
    }

    public function rewind() {
        reset($this->arrChilds);
    }

    public function key() {
        return key($this->arrChilds);
    }

    /**
     * Existence usually ensured via (@link \hemio\html\Interface_\MaintainsChilds)
     */
    abstract public function isValidChild(\hemio\html\Interface_\HtmlCode $child);

    /**
     * Existence usually ensured via (@link \hemio\html\Interface_\MaintainsAppendages)
     */
    abstract public function getInheritableAppendages();
}
