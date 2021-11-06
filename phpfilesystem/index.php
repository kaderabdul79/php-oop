<?php

$filename = 'readme.txt';

if (!file_exists($filename)) {
    die("The file $filename does not exist.");
}

$f = fopen($filename, 'r');
if ($f) {
    $contents = fread($f, filesize($filename));
    fclose($f);
    echo nl2br($contents);
}
