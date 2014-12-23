<?php

use hemio\html\String;
use hemio\html\Document;
use hemio\html\P;
use hemio\html\Ul;
use hemio\html\Li;

class UlTest extends Helpers {

    public function test1() {
        $doc = new Document(new String('My Title'));
        $html = $doc->getHtml();
        $body = $html->getBody();

        for ($i = 0; $i < 100; $i++) {
            $p = new P;
            $p->addChild(new String('test'));
            $body->addChild($p);
        }

        for ($i = 0; $i < 100; $i++) {
            $ul = new Ul();
            $li = $ul->addChild(new Li);
            $li->addChild(new String('test'));
            $body->addChild($ul);
        }

        $this->_assertEqualsXmlFile($doc, 'ul100.html');
    }

    public function test2() {
        $doc = new Document(new String('My Title'));
        $html = $doc->getHtml();
        $body = $html->getBody();


        for ($i = 0; $i < 2000; $i++) {
            $p = new P;
            $p->addChild(new String('test'));
            $body->addChild($p);
        }

        for ($i = 0; $i < 2000; $i++) {
            $ul = new Ul();
            $li = $ul->addChild(new Li);
            $li->addChild(new String('test'));
            $body->addChild($ul);
        }

        $this->_assertEqualsXmlFile($doc, 'ul2000.html');
    }

}
