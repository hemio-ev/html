<?php

namespace hemio\html\Interface_;

/**
 * Description of ElementTag
 *
 * @author Michael Herold <quabla@hemio.de>
 */
interface ElementTag {

    /**
     * Defines the name of the element like 'emph' in <emph>
     * @return string
     */
    static function tagName();
}
