<?php

namespace hemio\html;

/**
 * Empty string
 */
class Nothing implements Interface_\HtmlCode
{

    use Trait_\HooksToString;

    public function __toString()
    {
        foreach ($this->hooksToString as $hook)
            $hook($this);

        return '';
    }

    public function describe()
    {
        return '(*nothing*)';
    }
}
