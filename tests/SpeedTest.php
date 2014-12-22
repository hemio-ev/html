<?php

use hemio\html\String;
use hemio\html\Document;
use hemio\html\P;
use hemio\html\Ul;
use hemio\html\Li;

class SpeedTest extends PHPUnit_Framework_TestCase {

    public function test0() {
        $out = (string) (new Document(new String('My Title')));
    }

    public function test1() {
        $doc = new Document(new String('My Title'));
        $html = $doc->getHtml();
        $body = $html->getBody();

        for ($i = 0; $i < 200; $i++) {
            $p = new P;
            $p->addChild(new String('test'));
            $body->addChild($p);
        }

        for ($i = 0; $i < 200; $i++) {
            $ul = new Ul();
            $li = $ul->addChild(new Li);
            $li->addChild(new String('test'));
            $body->addChild($ul);
        }

        $out = (string) $doc;
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

        $out = (string) $doc;
    }

}
