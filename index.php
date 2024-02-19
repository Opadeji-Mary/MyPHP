<?php
echo 'how are you';
echo '<br>';
$name='Timothy';
$age=236643;
echo '<br>';
$special=true;
echo 'my name is '.$name.'and my age is ' .$age;
echo '<br>';




$obj = new stdClass;
$obj->first_name='Oyindamola';
$ibj->last_name='Babatope';
$obj->age=23;

echo $obj->first_name;


// indexed array, associative array, multidimensional array
$array1=array('fish', 67, 89, 'egg', 'mango');

// for ($i=0; $i<count($array1); $i++){
//     print_r($array1[$i])
//     };
$array2=['Tea', 67, 90, true];

// print_r($array2[2]);

$new=array_push($array1, 'Garri', 'Semon');
$array1[3] = 'Sewa';
print_r($array1);

echo '<br>';

$array3=array('Lagos', 'Florida', 'Germany', 900, 'Zambia', 'Gambia', 'Narsarawa', 'Nepal');
$new=array_push($array3, 'Gambia', 'Chicago');
print_r($array3[10]);

echo '<br>';
?>