<?php

namespace hemio\html;

/**
 * The <code>meter</code> element represents a scalar gauge providing a
 * measurement within a known range, or a fractional value.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-meter-element
 */
class Meter extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'meter';
    }

}
