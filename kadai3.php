<?php

//1
function double($num) {
    return $num * 2;
}


//2
function add($a, $b) {
    return $a + $b;
}


//3
function multiply_all($arr) {
    $total = 1;
    foreach ($arr as $a) {
        $total *= $a;
    }
    return $total;
}

$array = array(1, 3, 5 ,7, 9);
echo multiply_all($array);


//4
function max_array($arr) {
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}


//5
#strip_tags
$text = "<h1>プログラミング</h1><p>PHP</p>";
echo strip_tags($text);

echo strip_tags($text, "<h1>");


#array_push
$array = array("どら焼き", "カステラ");
print_r($array);

array_push($array, "わらび餅", "ぜんざい");
print_r($array);


#array_merge
$tea1 = array("麦茶", "ウーロン茶");
$tea2 = array("ほうじ茶", "緑茶");

$tea_variation = array_merge($tea1, $tea2);
print_r($tea_variation);


#time, mktime
echo time();

echo mktime(0, 0, 0, 11, 15, 2021);


#date
echo date("Y/n/j  A h:i  D");

echo date("Y/n/j  A h:i  D", mktime(15, 8, 30, 11, 15, 2021));

?>