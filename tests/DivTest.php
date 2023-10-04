<?php
/*
 * Copyright (C) 2014 Sophie Herold <sophie@hemio.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

namespace hemio\html;

/**
 * Description of DivTest
 *
 * @author Sophie Herold <sophie@hemio.de>
 */
class DivTest extends \Helpers
{

    public function test1()
    {
        $actual = new Div();
        $this->_assertEqualsXmlFile($actual, 'div1.html');
    }

    public function test2()
    {
        $actual = new Div();
        $actual->addChild(new P());
        $actual->addChildBeginning(new Span());

        $this->_assertEqualsXmlFile($actual, 'div2.html');
    }
}
