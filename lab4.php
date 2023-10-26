<?php
function isNull($a)     {echo 'isNull '     .  $a . ' '; if($a==0) echo "true"; else echo "false"; echo '<br/>'; }
isNull(1); isNull(0); isNull(-3);
function moreNull($a)   {echo 'moreNull '   .  $a . ' '; if($a>0) echo "true"; else echo "false"; echo '<br/>'; }
moreNull(1); moreNull(0); moreNull(-3);
function lessNull($a)   {echo 'lessNull '   .  $a . ' '; if($a<0) echo "true"; else echo "false"; echo '<br/>'; }
lessNull(1); lessNull(0); lessNull(-3);
function moreIsNull($a) {echo 'moreIsNull ' .  $a . ' '; if($a>=0) echo "true"; else echo "false"; echo '<br/>'; }
moreIsNull(1); moreIsNull(0); moreIsNull(-3);
function lessIsNull($a) {echo 'lessIsNull ' .  $a . ' '; if($a>=0) echo "true"; else echo "false"; echo '<br/>'; }
lessIsNull(1); lessIsNull(0); lessIsNull(-3);
function noNull($a)     {echo 'noNull '     .  $a . ' '; if($a!=0) echo "true"; else echo "false"; echo '<br/>'; }
noNull(1); noNull(0); noNull(-3);
function isTest($a)     {echo 'isTest '     .  $a . ' '; if($a=='test') echo "true"; else echo "false"; echo '<br/>'; }
isTest('test'); isTest('testing'); isTest('3');
function isOneIntStr($a){echo 'isOneIntStr ' .  $a . ' '; if($a=='1' or $a==1) echo "true"; else echo "false"; echo '<br/>'; }
isOneIntStr('1'); isOneIntStr(1); isOneIntStr(3);
function isEmpty($a)    {echo 'isEmpty ';
    foreach($a as $el){
       echo $el . ' '; if(empty($el)) echo "true"; else echo "false"; echo '<br/>'; }}
isEmpty([1,3,-3,0,null,true,'','0']);
function isIsset($a){echo 'isIsset ';
    foreach($a as $el){
       echo $el . ' '; if(isset($el)) echo "true"; else echo "false"; echo '<br/>'; }}
isIsset([1,3,-3,0,null,true,'','0']);
function nisEmpty($a){echo 'nisEmpty ';
    foreach($a as $el){
       echo $el . ' '; if(!empty($el)) echo "true"; else echo "false"; echo '<br/>'; }}
nisEmpty([1,3,-3,0,null,true,'','0']);
function nisIsset($a){echo 'nisIsset ';
    foreach($a as $el){
       echo $el . ' '; if(!isset($el)) echo "true"; else echo "false"; echo '<br/>'; }}
nisIsset([1,3,-3,0,null,true,'','0']);
function isTrue($a){echo 'isTrue ' .  $a . ' '; if($a==true) echo $a; else echo 'false'; echo '<br/>'; }
isTrue(true);isTrue(false);
function isTrue2($a){echo 'isTrue2 ' .  $a . ' '; if($a) echo "true"; else echo "false"; echo '<br/>'; }
isTrue2(true); isTrue2(false);
function isBetween05($a){echo 'isBetween05 ';
    foreach($a as $el){
       echo $el . ' '; if($el>0 and $el<5) echo "true"; else echo "false"; echo '<br/>'; }}
isBetween05([5,0,-3,2]);
 function isTwoOrNull($a){echo 'isTwoOrNull ';
    foreach($a as $el){
       echo $el . ' '; if($el>0 and $el<5) echo $el+7; else echo $el/10; echo '<br/>'; }}
isTwoOrNull([5,0,-3,2]);
function isA1B3($a){echo 'isA1B3 ';
    foreach($a as $el){
       echo $el[0] . ' ' . $el[1] . '=>'; if($el[0]<=1 and $el[1]>=3) echo $el[0]+$el[1]; else echo $el[0]-$el[1]; echo '<br/>'; }}
isA1B3([[1,3],[0,6],[3,5]]);
function isAmore2less11BmoreEqual3($a){echo ' isAmore2less11BmoreEqual3 ';
    foreach($a as $el){
       echo $el[0] . ' ' . $el[1] . '=>'; if($el[0]>2 and $el[0]<11 and $el[1]>=3) echo '->true'; else echo '->false'; echo '<br/>'; }}
isAmore2less11Bmoreequal3([[1,3],[0,6],[3,5]]);
function Na_switch_case($variable){
    foreach($variable as $element_of_variable)
    switch($element_of_variable){
    case 1: echo 'winter ';      break;
    case 2: echo 'grey days ';   break;
    case 3: echo 'summer ';      break;
    case 4: echo 'yellow time '; break;
    } echo '<br/>';
}
Na_switch_case([1,2,3,4]);
function decade($a){
    $decades = ['first', 'seconde', 'third', 'third', 'enough']; 
    echo 'day-> ' . $a . ', decade-> ' . $decades[$a/10] . '<br/>';
}
for($i = 0; $i<31; $i+=3){
decade($i);}

function yearType($monthNumber){
    echo $monthNumber . ' '; $monthNumber%=12;
    Na_switch_case([ceil(($monthNumber+0.42)/3)]);
} for($i = 1; $i<=12; $i+=1){
yearType($i);}
function isBisSextus($year){
    echo $year . ' isBisSextus-> '; 
    if($year%4==0 and $year%100!=0 or $year%400==0) echo "yes";
    else echo 'no';
    echo '<br/>';
}
isBisSextus(1700);
isBisSextus(2004);

$str1 = 'abcde';
if($str1[0] = 'a') echo "true ";
$str2 = '12345';
if($str2[0] == 1 or $str2[0] == 2 or $str2[0] == 3) echo "true" . '<br/>';
else echo "false<br/>";
function sixNumsHalfEq($s){
    if($s[0]+$s[1]+$s[2] == $s[3]+$s[4]+$s[5]) echo "half == half";
}
sixNumsHalfEq('123123');

?>
