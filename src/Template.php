<?php

namespace hemio\html;

/**
 * The <code>template</code> element is used to declare fragments of HTML that 
 * can be cloned and inserted in the document by script.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/scripting-1.html#the-template-element
 */
class Template extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'template';
    }

}
