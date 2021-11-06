<?php

$filename = 'readme.txt';
$lines = [];

$f = fopen($filename, 'r');

if (!$f) {
    return;
}

while (!feof($f)) {
    $lines[] = fgets($f);
}

// foreach($lines as $line){
//     print_r($line);
// }
print_r($lines);

fclose($f);