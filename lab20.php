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
echo "<br>____________________________________________1______<br>";
echo preg_replace('#(b)aaa#', '$1!', 'baaa');echo '<br>';
echo preg_replace('#(?<=b)aaa#', '!', 'baaa');
echo "<br>____________________________________________2______<br>";
echo preg_replace('#(?<!b)aaa#', '!', 'baaa waaa');echo '<br>';
echo preg_replace('#([^b])aaa#', '\1!', 'baaa waaa');
echo "<br>____________________________________________3______<br>";
echo preg_replace('#aaa(?=b)#', '!', 'aaab');echo '<br>';
echo preg_replace('#aaa(b)#', '!$1', 'aaab');
echo "<br>____________________________________________4______<br>";
echo preg_replace('#aaa(?!b)#', '!', 'aaab aaaw'); echo '<br>';
echo preg_replace('#aaa([^b])#', '!\1', 'aaab aaaw');
echo "<br>____________________________________________5______<br>";
echo preg_replace('#(?<!\*)\*(?!\*)#', '!', 'aaa * bbb ** eee * **');
echo "<br>____________________________________________6______<br>";
echo preg_replace('#(?<!\*)\*\*(?!\*)#', '!', 'aaa * bbb ** eee *** kkk ****');
echo "<br>____________________________________________7______<br>";
echo preg_replace('#(.)(\1)#', '!\2', 'aaa * bbb ** eee *** kkk ****'); echo '<br>';
echo preg_replace('#(.)(\1)#', '!\1', 'aaa * bbb ** eee *** kkk ****');
echo "<br>____________________________________________8______<br>";
echo preg_replace('#(.)(\1)#', '\1!', 'aaa * bbb ** eee *** kkk ****');
echo "<br>____________________________________________9______<br>";
echo preg_replace_callback('#\d+#','f9', '1 2 3 4 words speaks volumes 5 6 7 8');
function f9($m){ $res = "";
foreach($m as $s) $res = $res.pow(intval($s),2);
return $res;}
echo "<br>____________________________________________10_____<br>";
echo preg_replace_callback("#(?<=')\d(?=')#", 'f10', "2aaa'3'bbb'4'");
function f10($m){$res = ""; foreach($m as $s) $res=$res.(intval($s)*2); return $res;}








?>
