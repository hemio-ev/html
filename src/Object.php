<?php

namespace hemio\html;

/**
 * The <code>object</code> element represents external content.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/embedded-content-0.html#the-object-element
 */
class Object extends Abstract_\ElementContent implements Interface_\Submittable {

    use Trait_\Submittable,
        Trait_\DefaultElementContent;

    public static function tagName() {
        return 'object';
    }

}
