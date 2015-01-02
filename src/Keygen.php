<?php

namespace hemio\html;

/**
 * The <code>keygen</code> element represents a control for generating a public-
 * private key pair and for submitting the public key from that key pair.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-keygen-element
 */
class Keygen extends Abstract_\ElementContent implements Interface_\Submittable {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'keygen';
    }

}
