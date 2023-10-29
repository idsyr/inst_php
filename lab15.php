<?php
echo "<br>____________________________________1________<br>";
function cut(&$str, $n = 10){
    $str = substr($str, 0, -1*(strlen($str)-10));}
$str = "weather report"; cut($str); echo $str;
echo "<br>____________________________________2________<br>";
$arr = [1,2,3,4,5,6,7,8,9];
function recurPrint($arr, $i = 0){
    if(count($arr)==$i) return;
    echo $arr[$i] . ' '; 
    recurPrint($arr, $i+1);
} recurPrint($arr);
echo "<br>____________________________________3________<br>";
function deepDigSum($num){ $sum = 0;
    if(floor($num/10)==0) return $num;
    dig: $sum+=$num%10; $num = floor($num/10);
    if(floor($num)!=0) goto dig;
    $num = $sum; $sum = 0;
    if(floor($num/10)!=0) goto dig;
    return $num;
} echo deepDigSum(999);



?>
