<?php
echo "<br>_______________________________________________1________<br>";
$arr = [1,2,3,4,5,6,7,8,9];
echo array_sum($arr)/count($arr) . '<br>';
echo "<br>_______________________________________________2________<br>";
function fib($n){
    if($n>0)return fib($n-1) + $n;
    else return $n;
} echo fib(100) . '<br>';
echo "<br>_______________________________________________3________<br>";
function tho($n1, $n2){
    if($n1<$n2){
        echo $n1 . ' ';
        tho($n1+1, $n2);
    } else return;
} tho(0,100);
echo "<br>_______________________________________________4________<br>";
function setEls(&$arr, $n, $s){
    if(count($arr)<$n){$arr[] = $s; setEls($arr, $n, $s);}
    else return;
} $arr = []; setEls($arr, 10, 'x');
var_dump($arr); echo '<br>';
echo "<br>_______________________________________________5________<br>";
$rand_arr = range(1, 10);
shuffle($rand_arr);
var_dump($rand_arr);
echo "<br>_______________________________________________6________<br>";
function factl($n){
    if($n>0) return factl($n-1)*$n;
    else return 1;
} echo factl(5);
echo "<br>_______________________________________________7________<br>";
function symSum($n){
    if(strlen($n)>0){
        $n1 = substr($n, 0, -1);
        $n2 = substr($n, -1);
        return symSum($n1) + intval($n2);   
    }
    else return intval($n);
} echo symSum(123);
echo "<br>_______________________________________________8________<br>";
$str = 'qwerty';
$str[strlen($str)-1] = mb_strtoupper($str[strlen($str)-1]);
echo $str;
echo "<br>_______________________________________________9________<br>";
$nums = [1,2,3,4,5,6,7,8,9];
function sqrtArr(&$arr, $n){
    if(count($arr)>$n){
        $arr[$n] = sqrt($arr[$n]);
        sqrtArr($arr, $n+1);
    } else return;
} sqrtArr($nums, 0);
var_dump($nums);
echo "<br>______________________________________________10________<br>";
$alpha = range('a', 'z');
function ex10(&$arr, $keys, $n){
    if($n<26){
        $arr[$keys[$n]] = $n;
        ex10($arr, $keys, $n+1);
    } else return;
}
$arr = [];
ex10($arr, $alpha, 0);
var_dump($arr);



?>
