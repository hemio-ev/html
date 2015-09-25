<?php

namespace hemio\html;

/**
 * The <code>button</code> element represents a button labeled by its contents.
 *
 * @since 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-button-element
 */
class Button extends Abstract_\ElementContent implements Interface_\Submittable
{

    use Trait_\Submittable,
        Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'button';
    }

    /**
     *
     * @param string $type
     */
    public function __construct($type = null)
    {
        if ($type !== null)
            $this->setAttribute('type', $type);
    }
}
