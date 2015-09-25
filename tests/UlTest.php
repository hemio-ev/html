<?php

use hemio\html\Str;
use hemio\html\Document;
use hemio\html\P;
use hemio\html\Ul;
use hemio\html\Li;

class UlTest extends Helpers {

    /**
     * @param integer $n
     */
    private function largeDocument($n) {
        $doc = new Document(new Str('My Title'));
        $html = $doc->getHtml();
        $body = $html->getBody();


        for ($i = 0; $i < $n; $i++) {
            $p = new P;
            $p->addChild(new Str('test'));
            $body->addChild($p);
        }

        for ($i = 0; $i < $n; $i++) {
            $ul = new Ul();
            $li = $ul->addChild(new Li);
            $li->addChild(new Str('test'));
            $body->addChild($ul);
        }

        return $doc;
    }

    public function test100() {
        $doc = $this->largeDocument(100);

        $this->_assertEqualsXmlFile($doc, 'ul100.html');
    }

    public function test2000() {
        $doc = $this->largeDocument(2000);

        $this->_assertEqualsXmlFile($doc, 'ul2000.html');
    }

}
