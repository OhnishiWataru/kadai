<?php

$string = "ABCDEF";
echo strlen($string);

$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);

$array = array(2, 5, 9, 7, 3, 1, 8, 6, 4);
asort($array);
print_r($array);

arsort($array);
print_r($array);


//ここから課題
function sum($max){
  $result = $max * 2;
  return $result;
}
echo sum(10);

function f($a, $b) {
  $result = $a + $b;
  return $result;
}
echo f(1, 3);

function multiply($arr) {
  $result = 2;
  foreach($arr as $value) {
    $result *= $value;
  }
  return $result;
}
$a = array(1, 3, 5, 7, 9);
echo multiply($a);
echo "\n";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a) {
  if($max_number < $a) {
    $max_number = $a;
  }
  }
  return $max_number;
}
$a = array(1, 2, 3, 4, 5);
echo max_array($a);
echo "\n";

?>
