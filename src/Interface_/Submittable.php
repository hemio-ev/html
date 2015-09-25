<?php

namespace hemio\html\Interface_;

/**
 * Elements that contributed to the data set of a form when submitted
 *
 * @url http://www.w3.org/TR/html5/forms.html#categories
 */
interface Submittable extends MaintainsAppendages, HtmlCode
{

    /**
     * Sets the 'name' attribute
     * @param string $name
     */
    public function setName($name);

    /**
     * Sets the 'form' attribute. This attribute associates the submittable
     * element with the form element with the correspoding name.
     *
     * @param string $formName
     */
    public function setForm($formName);
}
