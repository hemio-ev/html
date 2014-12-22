#!/usr/bin/php
<?php
chdir('../');
require 'vendor/autoload.php';

foreach (new RecursiveIteratorIterator(
new RecursiveDirectoryIterator('src',
                               RecursiveDirectoryIterator::FOLLOW_SYMLINKS)) as
            $file)
    if ($file->isFile() && $file->getExtension() === 'php')
        require_once $file;
