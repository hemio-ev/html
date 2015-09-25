<?php

namespace hemio\html;

/**
 * The <code>legend</code> element represents a title or explanatory caption for
 * the rest of the contents of the legend element's parent element.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-legend-element
 */
class Legend extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'legend';
    }
}
