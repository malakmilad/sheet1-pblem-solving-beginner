<?php
//?sort
$sort = array(4, 6, 2, 22, 11);
sort($sort);
foreach ($sort as $number) {
    echo "<br>" . $number;
}
echo "<hr>";
//?filter
$filter = [6, 7, 8, 9, 10, 11, 12];
$result = array_filter($filter, function ($x) {return $x % 2 == 0;});
foreach ($result as $value) {
    echo "<br>" . $value;
}
echo "<hr>";
//?reduce
$reduce = [1, 2, 3];
$results = array_reduce($reduce, function ($a, $b) {return $a + $b;});
echo $results;
echo "<hr>";
//?slice
$slice = array("red", "green", "blue", "yellow", "brown");
$slices=array_slice($slice, 1,2);
foreach($slices as $value){
    echo "<br>" . $value;
}
echo "<hr>";
//?max and min
$max=[1,2,5,8,9];
echo max($max);
echo "<hr>";
echo min($max);
echo "<hr>";
//?repeat
echo str_repeat("Wow",5);
//?to string 
echo "<hr>";
$var=58;
print_r(strval($var));
echo "<hr>";
//?split
$split='malak milad';
print_r(str_split($split));
echo"<br>";
print_r(explode(" ",$split));
echo "<hr>";
//?map
$map=[1,5,8,9,10];
$maps= array_map(function($x){return $x;},$map);
foreach($maps as $map){
    echo"<br>".$map;
}
echo "<hr>";
//?reverse
$reverse=[1,2,3];
print_r(array_reverse($reverse));
echo "<hr>";
//?indexof&&find
$index=['blue','red','green','black'];
print_r(array_search('blue',$index));
echo "<hr>";
//?push
$push=[1,2,3];
array_push($push,4,5);
print_r($push);
echo "<hr>";
//?join
$join=['m','a','l','a','k'];
echo join("",$join);
//?eval
//?number
//?isInteger
//?sqrt
//?array.from
//?array
//?keys
//?floor