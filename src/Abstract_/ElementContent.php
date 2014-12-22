<?php

namespace hemio\html\Abstract_;

abstract class ElementContent extends Element implements \hemio\html\Interface_\MaintainsChilds {

    use \hemio\html\Trait_\ChildMaintainance;

    /**
     *
     */
    public function __toString() {
        $blnFormatted = true;

        if ($this->blnIsBlock() && $blnFormatted)
            $strNewLine = PHP_EOL;
        else
            $strNewLine = '';

        $strReturn = '';

        $strReturn .=
                '<' . static::tagName()
                . $this->getFormattedElementAttributes()
                . '>'
                . $strNewLine;

        foreach ($this as $child)
            $strReturn .= (string) $child;

        $strReturn .=
                $strNewLine .
                '</' . static::tagName() .
                '>' .
                $strNewLine;

        return $strReturn;
    }

    /**
     * Default assumption is, that an element is not a block element.
     * This might be overwritten by the implementation of a specific element.
     * 
     * @return boolean
     */
    public function blnIsBlock() {
        return false;
    }

    public function describe() {
        return sprintf('%s(%d)', $this->tagName(), $this->count());
    }

}
