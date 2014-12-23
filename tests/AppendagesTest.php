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

/**
 * Description of AppendagesTest
 *
 * @author Michael Herold <quabla@hemio.de>
 */
class AppendagesTest extends Helpers {

    public function testBasic() {
        $doc = new hemio\html\Document(new hemio\html\String(''));
        $doc->addInheritableAppendage('axkdw_sda2', '-lsk3jfl#1-');
        $div = new \hemio\html\Div;
        $doc->getHtml()->getBody()->addChild($div);

        $this->assertEquals('-lsk3jfl#1-', $div->getInheritableAppendage('axkdw_sda2'));
    }

    public function testLateAdded() {
        $doc = new hemio\html\Document(new hemio\html\String(''));
        $div = new \hemio\html\Div;
        $doc->getHtml()->getBody()->addChild($div);
        $doc->addInheritableAppendage('axkdw_sda2', '-lsk3jfl#1-');

        $this->assertEquals('-lsk3jfl#1-', $div->getInheritableAppendage('axkdw_sda2'));
    }

    public function testBasicExisting() {
        $doc = new hemio\html\Document(new hemio\html\String(''));
        $doc->addInheritableAppendage('key', 'overwritten-value');
        $div = new \hemio\html\Div;
        $div->addInheritableAppendage('key', 'existing-value');
        $doc->getHtml()->getBody()->addChild($div);

        $this->assertEquals('existing-value', $div->getInheritableAppendage('key'));
    }

    public function testLateAddedExisting() {
        $doc = new hemio\html\Document(new hemio\html\String(''));
        $div = new \hemio\html\Div;
        $div->addInheritableAppendage('key', 'existing-value');
        $doc->getHtml()->getBody()->addChild($div);
        $doc->addInheritableAppendage('key', 'overwritten-value');

        $this->assertEquals('existing-value', $div->getInheritableAppendage('key'));
    }

}
