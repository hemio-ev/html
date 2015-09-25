<?php

namespace hemio\html;

/**
 * The <code>progress</code> element represents the completion progress of a
 * task.
 *
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/forms.html#the-progress-element
 */
class Progress extends Abstract_\ElementContent
{

    use Trait_\DefaultElementContent;

    public static function tagName()
    {
        return 'progress';
    }
}
