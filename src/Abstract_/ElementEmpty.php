<?php

namespace hemio\html\Abstract_;

/**
 * Enpty HTML elements, e.g. the br-tag
 */
abstract class ElementEmpty extends Element {

    /**
     * Simply gives the <code><tag /></code> element with the defined attributes
     *
     * @return string
     */
    public function __toString() {
        return '<' .
                static::tagName() .
                $this->getFormattedElementAttributes() .
                ' />';
    }

}
