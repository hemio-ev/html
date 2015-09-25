<?php

/*
 * Copyright (C) 2015 Michael Herold <quabla@hemio.de>
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

namespace hemio\html;

/**
 * Description of IteratorTest
 *
 * @author Michael Herold <quabla@hemio.de>
 */
class IteratorTest extends \Helpers {

    public function testRecursiveIterator() {
        $doc = $this->getExample();
        $this->assertCount(13, $doc->getRecursiveIterator());
    }

    public function testRecursiveIteratorFiltered() {
        $doc = $this->getExample();

        $select = function (Interface_\HtmlCode $child) {
            return $child instanceof \hemio\html\Div;
        };

        foreach ($doc->getRecursiveIterator($select) as $child)
            $this->assertInstanceOf('\hemio\html\Div', $child);

        $this->assertCount(3, $doc->getRecursiveIterator($select));
    }

    public function getExample() {
        $doc = new Document(new Str('Title'));

        $doc->getHtml()
                ->addChild(new Header())
                ->addChild(new Div());

        $doc->getHtml()
                ->addChild(new Div())
                ->addChild(new Section())
                ->addChild(new Article())
                ->addChild(new Div());

        return $doc;
    }

}
