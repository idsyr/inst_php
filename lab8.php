<?php
function pow2($num){
    return $num*$num;
} echo pow2(2) . '<br>';
function sum($n1, $n2){
    return $n1+$n2;
} echo sum(2, 2) . '<br>';
function exc(&$number1, $number2, $number3){
    $number1 = ($number1-$number2)/$number3;
}
$n1 = 10; $n2 = 2; $n3 = 2;
exc($n1, $n2, $n3);
echo $n1 . "\n";
function numToD($d){
    $days = [1=>'Пондельник', 'Вторник', 'Среда', 'Четверт', 'Пятница', 'Суббота', 'Воскресение'];
    return $days[$d];
} echo numToD(2);



?>
