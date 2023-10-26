<?php
echo "<br>________________________________________1<br>";
$arr = [];
for($i = 1; $i<4; ++$i){
    $arr[$i] = 'x';
    for($k = 1; $k<$i; ++$k)
        $arr[$i] = $arr[$i] . 'x';
} var_dump($arr);
echo "<br>________________________________________2<br>";
$arr = [];
for($i = 1; $i<4; ++$i){
    $arr[$i] = $i;
    for($k = 1; $k<$i; ++$k)
        $arr[$i] = $arr[$i] . $i;
} var_dump($arr);
echo "<br>________________________________________3<br>";
function arrayFill($val, $len){
    $arr = [];
    for($i = 0; $i<$len; ++$i){
        $arr[] = $val;
    }
    return $arr;
} var_dump(arrayFill(7,3));
echo "<br>________________________________________4<br>";
function countForMore($arr, $val){ $tec = 0;
    for($i = 0, $sz = count($arr); $i<$sz; ++$i){
        if($tec>$val) return $i;
        $tec+=$arr[$i];}
    return -1;
} echo countForMore(arrayFill(3,7), 10);
echo "<br>________________________________________5<br>";
$arr = [[1,2], [3,4,5], [6], [7,8], [9]] ;
function deepArrSum($arr){ $res = 0;
    if(!is_array($arr)) return $arr;
    foreach($arr as $el){
            $res+=deepArrSum($el);}
    return $res;
} echo deepArrSum($arr);
echo "<br>________________________________________6<br>";
$arr = [[[1,2],[3,4]],[[5,6],[7,8]]];
echo deepArrSum($arr);
echo "<br>________________________________________7<br>";
$arr = [];
for($i = 0; $i<3; ++$i){
    $arr2 = [];
    for($k = 0; $k<3; ++$k){
        $arr2[] = $i*3+$k;
    }
    $arr[] = $arr2;
} var_dump($arr);

?>
