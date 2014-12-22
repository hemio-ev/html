<?php

namespace hemio\html;

/**
 * Empty string
 */
class Nothing implements Interface_\HtmlCode {

    public function __toString() {
        return '';
    }

    public function describe() {
        return '(*nothing*)';
    }

}
