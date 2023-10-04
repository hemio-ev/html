<?php

namespace hemio\html\Interface_;

/**
 * Description of ElementTag
 *
 * @author Sophie Herold <sophie@hemio.de>
 */
interface ElementTag
{

    /**
     * Defines the name of the element like 'emph' in <emph>
     * @return string
     */
    static function tagName();
}
