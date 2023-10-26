<?php

$sqrt = sqrt(1000);
echo floor($sqrt); echo " floor <br/>";
echo ceil($sqrt);  echo " ceil <br/>";

$arr = array($sqrt, floor($sqrt), ceil($sqrt));

foreach($arr as &$el){
  echo "$el foreach <br/>";  
}

$random[] = mt_rand(1,10);
$random[] = mt_rand(1,10);

echo "$random[0] rand1 <br/>";
echo "$random[1] rand2 <br/>";

$a=10; $b=3;

echo $a%$b . " a%b <br/>";

if($a%$b == 0) echo "DELITCA";
else echo "NEDELIDCA=" . $a%$b . " Остаток";
echo "<br/>";

$st = pow(2, 10); echo "$st st <br/>";

echo sqrt(245) . " sqrt(245)<br/>";

$digits = [4,2,5,19,13,0,10]; $sum = 0;
foreach($digits as &$el){
  $sum+=pow($el, 2);
} echo $sum . " sum<br/>";

$rou = sqrt(379);

echo round($rou, 0) . " round<br/>";
echo round($rou, 1) . " round<br/>";
echo round($rou, 2) . " round<br/>";


echo floor(sqrt(587)) . " floor(sqrt(587)) <br/>";
echo ceil(sqrt(587))  . " ceil(sqrt(587)) <br/>";

$arr2 = [4,-2,5,19,-130,0,10];
echo min($arr2) . " min<br/>";
echo max($arr2) . " max<br/>";

echo mt_rand(1,100);
for($i = 0; $i<10; ++$i){
  $mt_rand_arr[] = mt_rand(42, 4048);
}
foreach($mt_rand_arr as &$el){
  echo "$el ";
} echo " rand numbers <br/>";

$arr3 = [1,2,-1,-2,3,-3];
foreach($arr3 as &$el){
  echo abs($el) . "\t";
} echo " abs array <br/>";

$digit = 30;
for($i = 1; $i <= $digit; ++$i){
  if($digit%$i==0) echo $i . "\t";
} echo " dividers of $digit<br/>";

$arr4 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]; $sum = 0; $i = 0;
for(; $sum<=10; ++$i){
  $sum+= $arr4[$i];
}
echo $i . " первых<br/>";
?>     
