<?php

#require 'vendor/autoload.php';

class LoadAllClasses extends PHPUnit_Framework_TestCase {

    public function test() {
        foreach (new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator('src', RecursiveDirectoryIterator::FOLLOW_SYMLINKS)) as $file)
            if ($file->isFile() && $file->getExtension() === 'php')
                require_once $file;
    }

}
