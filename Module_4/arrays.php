<?php
/*
$sports = ['Football', 'Baskteball', 'Volleyball'];
echo $sports[2];
"<br>";

echo end($sports);

"<br>";

echo count($sports);

"<br>";


$sports = array('Football', 'Basketball', 'Voleyball');
for($i = 0; $i < 3; $i++) {
    echo $sports[$i], "\n";
}

$sports = ['Football', 'Baskteball', 'Volleyball'];
array_push($sports, "Golf");
var_dump($sports);


$sports = ['Football', 'Baskteball', 'Volleyball', 'Golf'];
array_pop($sports);
var_dump($sports);

$sports = ['Football', 'Baskteball', 'Volleyball', 'Golf'];
array_unshift($sports, 'Tennis');
var_dump($sports);
 */

$sports = ['Football', 'Baskteball', 'Volleyball', 'Golf'];
array_shift($sports);
var_dump($sports);



?>