<?php
namespace hemio\html;
chdir('../');
require 'vendor/autoload.php';

echo (new html\Document(new String('My Title')));

