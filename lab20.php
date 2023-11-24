<?php
echo preg_replace('#(?<=x)aaa#', '!', 'xaaa baaa').'<br>';
echo preg_replace('#(?<!x)aaa#', '!', 'xaaa baaa').'<br>';
echo preg_replace('#aaa(?=x)#', '!', 'aaax aaab').'<br>';
echo preg_replace('#aaa(?!x)#', '!', 'aaax aaab').'<br>';
echo preg_replace_callback('#(\d+)\+(\d+)=#', 'sum', '2+3=');
function sum($matches){
$sum = $matches[1] + $matches[2];
$result = $matches[0].$sum;
return $result;}
echo preg_replace('&
.+? #502
g   #205
&x', '!','string').'<br>';
//ms
echo preg_replace('#(?<=z)yy#i', '!', 'zyy ayy').'<br>';
echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3');
function cube($m){return pow($m[0],3);}
 




?>
