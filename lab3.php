<?php
$a = [];
$a = ['Mon','Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$b = ['Mon', 2, 'Wed', 4, 'Fri', 6, 'Sun'];
var_dump($a); echo '<br/>';
var_dump($b); echo '<br/>';
echo $a[4] . '<br/>';
$c = [1=>'Mon', 2=>'Tue', 3=>'wed', 4=>'Thu', 5=>'Fri', 6=>'Sat', 7=>'Sun'];
echo $c[1] . '<br/>';
$d = [1=>'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
echo $d[3] . '<br/>';
$v[0] = 'Mon';
$v[1] = 'Tue';
$e = [$a, $b];
var_dump($e); echo '<br/>';
echo '<br/>';

$s1 = ['Hello ', 'World', '!'];
foreach($s1 as $el){
    echo $el . '';
} echo '<br/>';
$s2 = '';
foreach($s1 as $el){
    $s2 = $s2 . $el;
} echo $s2 . "<br/>";
$s1[0] = 'bye ';
foreach($s1 as $el){
    echo $el . '';
} echo '<br/>';
$arr = ['Petr'=>300, 'Kolya'=>350];
var_dump($arr); echo '<br/>';
$arr1 = [1,2,3,4,5];
$arr2[] = 1;
$arr2[] = 2;
$arr2[] = 3;
$arr2[] = 4;
$arr2[] = 5;
var_dump($arr1); echo '<br/>';
var_dump($arr2); echo '<br/>';
$lang = [
'ru'=>['голубой','красный','зеленый'],
'eng'=>['blue', 'red', 'green']
]; echo $lang['ru'][0] . '<br/>';
$abc = ['a', 'b', 'c']; var_dump($abc); echo '<br/>'; 
echo $abc[0] . $abc[1] . $abc[2] . '<br/>';
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0] . '+' . $arr[1] . ', ' . $arr[2] . '+' . $arr[3] . '<br/>';
$arr = [2,5,3,9];
$result = $arr[0]*$arr[1]+$arr[2]*$arr[3]; echo $result . '<br/>';
//$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;

foreach($arr as $el){
    echo $el . '';
} echo '<br/>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'] . "<br/>";
echo $arr['a'] + $arr['b'] + $arr['c'] . '<br/>';
echo $c[4] . '<br/>';
$day = 3; echo $c[$day] . '<br/>';

$arr = [
'cms'=>['joomla', 'wordpress', 'drupal'],
'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'желтый']];
echo $arr['cms'][0] . ' ' . $arr['cms'][2] . ' ' . $arr['colors']['green'] . ' ' . $arr['colors']['red'] . '<br/>';
$days = [
'ru'=>$c,
'us'=>[1=>'Пн','Вт','Ср','Чт','Пт','Сб','Вс']
]; echo $days['ru'][1] . ' ' . $days['us'][3] . '<br/>';
$lang = 'ru'; $day = 3; echo $days[$lang][$day];
?>
