<?php

namespace hemio\html;

/**
 * The <code>bdo</code> element represents an explicit text directionality formatting
  control for its children; it provides a means to specify a direction
  override of the Unicode BiDi algorithm [BIDI].
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-bdo-element
 */
class Bdo extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'bdo';
    }

}
