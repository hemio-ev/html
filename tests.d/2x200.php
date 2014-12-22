<?php
namespace hemio\html;
chdir('../');
require 'vendor/autoload.php';

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

echo $doc;
