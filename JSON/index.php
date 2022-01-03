<?php
$drinks = file_get_contents('drinks.json');
$drinks = json_decode($drinks);
// echo $drinks;
// print_r($drinks);
foreach($drinks as $drink){
     echo '<li>'.$drink->name.' and price is $'.$drink->price.'</li>';
}