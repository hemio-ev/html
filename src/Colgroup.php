<?php
namespace hemio\html;
/**
                   * The colgroup element represents a group of one or more columns in the table
that is its parent.
                   * 
                   * @since version 1.0
                   * @url http://www.w3.org/TR/html5/
                   */
class Colgroup extends Abstract_\ElementContent {
use Trait_\DefaultElementContent;
public static function tagName() {
    return 'colgroup';
}
}