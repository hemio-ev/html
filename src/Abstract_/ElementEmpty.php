<?php

namespace hemio\html\Abstract_;

/**
 * Empty HTML elements, e.g. the br-tag
 */
abstract class ElementEmpty extends Element
{

    /**
     * Simply gives the <code><tag /></code> element with the defined attributes
     *
     * @return string
     */
    public function __toString()
    {
        foreach ($this->hooksToString as $hook)
            $hook($this);

        return '<'.
            static::tagName().
            $this->getFormattedElementAttributes().
            ' />';
    }
}
