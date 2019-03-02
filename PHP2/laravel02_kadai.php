<?php

$integer = 20;
$string ="abc";

echo $integer;
echo $string;

$new_integer = $integer + 10;

echo $new_integer;

$red_fruit = "APPLE";
$yellow_fruit = "Banana";

$array = [2017, 2018, 2019, 2020];

echo $array[0];
echo $array[2];

echo $array2 = ["spring", "summer", "autumn", "winter"];
echo $array2[2];

$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
];

echo $animals["cat"];
echo $animals["bird"];

$result = true;

if ($result == ture) {
  echo "成功しました。";
} else {
  echo "失敗しました。";
}

$value = 6;
echo $value + 2;

$value = 6;
echo $value - 2;

$value = 6;
echo $value * 2;

$value = 6;
echo $value / 2;

$value = "AAA";
echo $value . "BBB";

$value = 10;
$result = $value == 20;
var_dump($result);

$value = 10;
$result = $value < 20;
var_dump($result);

$value = 10;
$result = $value > 20;
var_dump($result);

$a = "20";
$b = 20;

$result = $a == $b;
var_dump($result);

$result = $a === $b;
var_dump($result);

$value = 10;
++$value;
echo $value;

$value = 10;
--$value;
echo $value;

$value = 10;
$value += 5;
echo $value;

$value = 10;
$value -= 5;
echo $value;

$value = 'apple';
$value .= 'orenage';
echo $value;

$value = 10;
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';
echo $result;

//ここから課題
$a = 3;
$b = 7;
echo $a + $b;

$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];

$hello = "Hello,";
$name = "wataru";
$world = "`s World!";
echo $hello . $name . $world;

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",
];

// 12月を表示する
echo $calendar_2018["December"];

?>
