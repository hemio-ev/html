<?php

/*
 * Copyright (C) 2014 Michael Herold <quabla@hemio.de>
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

class Helpers extends PHPUnit_Framework_TestCase {

    protected function _assertEqualsXmlFile(hemio\html\Interface_\HtmlCode $objHtml, $strFile) {
        $expected = DOMDocument::load(__DIR__ . DIRECTORY_SEPARATOR . $strFile);
        $actual = new DOMDocument;
        $actualString = (string) $objHtml;
        $actual->loadXML($actualString);

        echo $actualString;
        $this->assertEqualXMLStructure($expected->documentElement, $actual->documentElement, true);
    }

}
