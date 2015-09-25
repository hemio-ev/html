<?php

namespace hemio\html;

/**
 * The <code>tbody</code> element represents a block of rows that consist of a body of data
  for its parent table element.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/tabular-data.html#the-tbody-element
 */
class Tbody extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'tbody';
    }
}
