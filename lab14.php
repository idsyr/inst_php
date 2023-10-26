<?php
echo "<br>_____________________________________1<br>";
function tlit($s){
    $rus = ['а','б','в','г','д','е','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','э','ю','я'];
    $lat = ['a','b','v','g','d','e','zg','z','i','yi','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','^','i','ie','u','ya'];
    return str_replace($rus, $lat, $s);
} echo tlit("небосклон");
echo "<br>_____________________________________2<br>";
function nform($num, $t1, $t2, $t3){ $n = $num . ' ';
    if($num>20) $num%=10;
    if($num==1) return $n . $t1;
    if($num>1 and $num<5) return $n . $t2;
    return $n . $t3;
} echo nform(25, "банка", "банки", "банок"); 
echo "<br>_____________________________________3<br>";
function lackyb(){
    $sum = []; for($i = 0; $i<28; ++$i) $sum[] = 0; $res = 0;
    for($i1 = 0; $i1<10; ++$i1)
    for($i2 = 0; $i2<10; ++$i2)
    for($i3 = 0; $i3<10; ++$i3)
        $sum[$i1+$i2+$i3]+=1;
    foreach($sum as &$el){$res+=$el*$el;}
    return $res;
} echo lackyb();
echo "<br>_____________________________________4<br>";
function arrSum($arr){
    $ans = 0;
    foreach($arr as $el)
        $ans+=$el;
    return $ans;}
function findDel($num){
   $arr = [];
   for($i = 1; $i<$num; ++$i)
        if($num%$i==0) {$arr[] = $i;}
    return $arr;}
function friendn(){
    for($i = 1; $i<10000;++$i){
        $sdi = arrSum(findDel($i));
        $fri = arrSum(findDel($sdi));
        if($fri==$i and $sdi!=$fri) echo $fri . ' ' . $sdi . "<br>";
    }
}    
friendn();


?>
