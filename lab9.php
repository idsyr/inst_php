<?php
echo "<br>___________________________________________lab9<br>";
function haveEl($arr, $el){
    foreach($arr as $arrel){
        if($arrel==$el) return true;}
    return false;}
function isPrime($num){
    for($i = 2; $i<$num; ++$i){
        if($num%$i==0) return false;}
    return true;}
function isRepeat($arr){
    $pre = $arr[0];
    $sz = count($arr);
    for($i = 1; $i<$sz; ++$i){
        if($arr[$i]==$pre){
            echo "yes<br>";
            return true;}
        $pre = $arr[$i];}
    echo "no<br>";
    return false;}
$arr = [1,2,3,4,5,5,6,7,8,9];
echo "haveEL: " . haveEl($arr, 5) . "<br>";
echo "isPrime(31): " . isPrime(31) . "<br>";
echo "isRepeat: "; isRepeat($arr);
echo "<br>___________________________________________lab10<br>";
function EQL($a, $b){
    return $a==$b;} echo "EQL:" . EQL(1,1) . "<br>";
function GRTR10($a, $b){
    return $a+$b>10;} echo "GRTR10:" . GRTR10(7,5) . "<br>";
function isNGV($n){
    return $n<0;} echo "isNGV:" . isNGV(-1) . "<br>";
?>
