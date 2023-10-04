<?php
/*
 * Copyright (C) 2015 Sophie Herold <sophie@hemio.de>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace hemio\html\Trait_;

/**
 *
 * @todo ensure propper name
 * @todo description
 * @author Sophie Herold <sophie@hemio.de>
 */
trait Submittable
{

    /**
     * Sets the 'name' attribute
     * @param string $name
     */
    public function setName($name)
    {
        $this->setAttribute('name', $name);
    }

    /**
     * Sets the 'form' attribute. This attribute associates the submittable
     * element with the form element with the correspoding name.
     *
     * @param string $formName
     */
    public function setForm($formName)
    {
        $this->setAttribute('form', $formName);
    }

    /**
     * @param string $strKey
     * @param mixed $mixValue
     */
    abstract public function setAttribute($strKey, $mixValue);
}
