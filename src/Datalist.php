<?php

namespace hemio\html;

/**
 * The <code>datalist</code> element represents a set of option elements that
 * represent predefined options for other controls.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-datalist-element
 */
class Datalist extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'datalist';
    }
}
