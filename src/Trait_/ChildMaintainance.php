<?php

namespace hemio\html\Trait_;

/**
 * Most required utils to implement elements that can have childs and
 * containers. Recomended implementation from most of
 * {@link MaintainsChilds} requirements.
 *
 * @uses MaintainsChilds ChildMaintainance is the recommended
 * implementation from most of MaintainsChilds requirements
 * @author Sophie Herold <sophie@hemio.de>
 * @todo Cleanup
 */
trait ChildMaintainance
{
    /**
     * child elemnts of the element
     * @var array
     */
    private $arrChilds = [];

    /**
     *
     * @var array[callable]
     */
    protected $arrHooksGainChild = [];

    public function addHookGainChild(callable $hook, $idx = null)
    {
        if ($idx === null)
            $this->arrHooksGainChild[]     = $hook;
        else
            $this->arrHooksGainChild[$idx] = $hook;
    }

    /**
     *
     * @return integer
     */
    public function count()
    {
        return count($this->arrChilds);
    }

    /**
     *
     * @param mixed $offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->arrChilds);
    }

    /**
     *
     * @param mixed $offset
     * @return Interface_\HtmlCode
     */
    public function offsetGet($offset)
    {
        return $this->arrChilds[$offset];
    }

    /**
     *
     * @param mixed $offset
     * @param Interface_\HtmlCode $value
     */
    public function offsetSet($offset, $value)
    {
        if ($this->isValidChild($value) || $value instanceof \hemio\html\Nothing) {
            if ($offset === null)
                $this->arrChilds[]        = $value;
            else
                $this->arrChilds[$offset] = $value;

            $this->gainChild($value);
        } else {
            trigger_error('An instance of `'.get_class($value).
                '` is no valid child for `'.get_class($this).'`', E_USER_WARNING);
        }
    }

    /**
     *
     * @param type $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->arrChilds[$offset]);
    }

    /**
     * Implements iteration
     *
     * @return \Traversable
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->arrChilds);
    }

    /**
     *
     * @param callable $selectFilter
     * @return \Traversable
     */
    public function getRecursiveIterator(callable $selectFilter = null)
    {
        if ($selectFilter === null) {
            return new \RecursiveIteratorIterator($this,
                                                  \RecursiveIteratorIterator::SELF_FIRST);
        } else {
            $array = [];

            foreach ($this->getRecursiveIterator() as $child) {
                if ($selectFilter($child)) {
                    $array[] = $child;
                }
            }

            return new \ArrayIterator($array);
        }
    }

    /**
     *
     * @param \hemio\html\Interface_\HtmlCode $child
     * @return \hemio\html\Interface_\HtmlCode
     */
    protected function addChildInternal(\hemio\html\Interface_\HtmlCode $child)
    {
        $this[] = $child;
        return $child;
    }

    /**
     *
     * @param \hemio\html\Interface_\HtmlCode $child
     * @return \hemio\html\Interface_\HtmlCode
     */
    public function addChildBeginning(\hemio\html\Interface_\HtmlCode $child)
    {
        array_unshift($this->arrChilds, $child);
        return $child;
    }

    /**
     *
     * @param \hemio\html\Interface_\HtmlCode $child
     */
    protected function gainChild(\hemio\html\Interface_\HtmlCode $child)
    {
        foreach ($this->arrHooksGainChild as $hook) {
            $hook($this, $child);
        }

        if ($child instanceof \hemio\html\Abstract_\Element)
            $child->setParent($this);

        if ($child instanceof \hemio\html\Interface_\MaintainsAppendages)
            foreach ($this->getInheritableAppendages() as $appKey => $appValue)
                $child->leaveInheritableAppendage($appKey, $appValue);
    }

    public function __clone()
    {
        foreach ($this->arrChilds as $key => $child) {
            $this->arrChilds[$key] = clone $child;
        }
    }

    public function valid()
    {
        return current($this->arrChilds) !== false;
    }

    public function hasChildren()
    {
        return $this->current() instanceof \RecursiveIterator;
    }

    public function next()
    {
        next($this->arrChilds);
    }

    public function current()
    {
        return current($this->arrChilds);
    }

    public function getChildren()
    {
        return $this->current();
    }

    public function rewind()
    {
        reset($this->arrChilds);
    }

    public function key()
    {
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
