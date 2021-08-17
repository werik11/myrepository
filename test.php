<?
$array = [9,9,9,9,9,9,9];
$arr = [9,9,9,9];

$newarray = array_reverse($array);
$newarr = array_reverse($arr);

$num1 = ( int ) join("", $newarray);
$num2 = ( int ) join("", $newarr);
$sum = $num1 + $num2;

$asd = str_split($sum);
$qwe = array_reverse($asd);
var_dump($qwe);

