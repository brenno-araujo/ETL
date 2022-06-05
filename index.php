<?php

require __DIR__ . '/vendor/autoload.php';

use App\Reader;

$reader = new Reader();
$reader->setDirectory(__DIR__.'/files');
$reader->setFile('datas.txt');

echo '<pre>';
        print_r($reader->read());
echo '</pre>';
