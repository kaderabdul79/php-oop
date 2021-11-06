<?php

$filename = 'readme.txt';

if (!file_exists($filename)) {
    die("The file $filename does not exist.");
}

$f = fopen($filename, 'r');
if ($f) {
    echo $f;
    
    echo 'The file ' . $filename . ' is open';
    fclose($f);
}
