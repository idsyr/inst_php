<?php
echo time(); echo '<br>';
echo mktime(12,43,59,1,31,2021); echo '<br>';
echo time() - mktime(21,0,0,2,1,2000); echo '<br>';
echo date('Y'); echo '<br>';
echo date('y'); echo '<br>';
echo date('m'); echo '<br>';
echo date("d"); echo '<br>';
echo date('j'); echo '<br>';
echo date('w'); echo '<br>';
echo date('H');  echo '<br>';
echo date("i"); echo '<br>';
echo date("s"); echo '<br>';
echo date('d-m-y');echo '<br>';
echo date('d.m.Y'); echo '<br>';
echo date('H:i:s d.m.Y'); echo '<br>';
echo date('d-m-Y', mktime(0,0,0,12,29,13)); echo '<br>';
echo date('w', mktime(0,0,0,12,29,13)); echo '<br>';
echo strtotime("now"); echo '<br>';
echo strtotime("10 September 2000");echo '<br>';
echo strtotime("+1 day");echo '<br>';
echo strtotime("+1 week");echo '<br>';
echo strtotime("+1 week 2 days 4 hours 3 seconds");echo '<br>';
echo strtotime("next Thursday");echo '<br>';
echo strtotime("last Monday"); echo '<br>';
$date = date_create('3035-12-31');
date_modify($date, '1 day');
echo date_format($date, 'd.m.Y');
echo '<br>';
$date = date_create("2025-12-31");
date_modify($date, '3 days');
echo date_format($date, 'd.m,Y');
echo '<br>';
$date = date_create("2025-12-31");
date_modify($date, '3 days 1 month');
echo date_format($date, 'd.m.Y');
echo '<br>';
$date = date_create('2025-01-01');
date_modify($date, '-1 day');
echo date_format($date, 'd.m.Y');
echo '<br>';

echo mktime(12,58,59,9,23,2031); echo '<br>';
echo strtotime('2031-09-23 12:58:59');echo '<br>';
echo time()-mktime(7,25,59,9,1, 2010);echo '<br>';
echo date("Y.m.d H:i:s"); echo '<br>';
echo mktime(0,0,0,9,1);
echo date('Y.m.d', mktime(0,0,0,9,1)); echo '<br>';

$day = date('w', mktime(0,0,0,9,1,2010));
$week = ['Sun', 'Mon', 'Tue', 'wed', 'Thu', 'Fri', 'Sat'];
echo $week[$day]; echo '<br>';
$arr = explode('-', '31-12-2025');
echo  mktime(0,0,0,$arr[1], $arr[0], $arr[2]);

echo "<br>_________________________________________________________________________1_____<br>";
echo strtotime("now") . ' ' . time() . ' '  ; echo '<br>';
echo "<br>_________________________________________________________________________2_____<br>";
echo strtotime('2025-03-01 00:00:00') . ' ' . mktime(0,0,0,03,01,25) . '<br>';
echo "<br>_________________________________________________________________________3_____<br>";
echo mktime(0,0,0,12,31) . '<br>';
echo "<br>_________________________________________________________________________4_____<br>";
echo time() - mktime(13, 12, 59, 3, 15, 00);
echo '<br>';
echo "<br>_________________________________________________________________________5_____<br>";
echo (time() - mktime(7, 23, 48))/3600;
echo '<br>';
echo "<br>_________________________________________________________________________6_____<br>";
echo date('H:i:s d.m.Y'); echo '<br>';
echo "<br>_________________________________________________________________________7_____<br>";
echo date('Y-m-d');echo '<br>';
echo date('d.m.Y'); echo '<br>';
echo date('d.m.y'); echo '<br>';
echo date('H:i:s'); echo '<br>'; 
echo "<br>_________________________________________________________________________8_____<br>";
echo date('d.m.Y', mktime(0,0,0,2,12,25));
echo "<br>_________________________________________________________________________9_____<br>";
echo $week[date('w', time())]; echo '<br>';
echo $week[date('w', mktime(0,0,0,6,6,6))]; echo '<br>';
echo $week[date('w', mktime(0,0,0,2,10,4))]; echo '<br>';
echo "<br>________________________________________________________________________10_____<br>";
$month = [1=>'january', 'february','march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
$s = date('m', time()); //n
if($s[0]==0)$s=$s[1]; 
echo $month[$s]; echo '<br>';
echo "<br>________________________________________________________________________11_____<br>";
echo date('t', time());
echo "<br>________________________________________________________________________12_____<br>";
 function isBisSextus($year){
    echo $year . ' isBisSextus-> '; 
    if($year%4==0 and $year%100!=0 or $year%400==0) echo "yes";
    else echo 'no';
    echo '<br/>';
}
if(!isset($_REQUEST['year']))echo <<<_END
<form action="" method = "GET">
      <input type="text" name="year"><br><br>
      <input type="submit">
</form>
_END;
if(isset($_REQUEST['year'])) echo isBisSextus($_REQUEST['year']);
if(isset($_REQUEST['year'])) echo '<br>' . date('L', strtotime("3 September" . $_REQUEST['year']));
echo "<br>________________________________________________________________________13_14__<br>";
if(!isset($_REQUEST['date1']))echo <<<_END
<form action="" method = "GET">
      <input type="date" name="date1" required pattern="\d{2}-\d{2}-\d{2}"><br><br>
      <input type="submit">
</form>
_END;
if(isset($_REQUEST['date1'])) {
    $els = explode('-', $_REQUEST['date1']);
    echo $_REQUEST['date1'] . ' is a ';
    echo $week[date('w', mktime(0,0,0,$els[1],$els[2],$els[0]))] . '<br>';
    $s = date('M', mktime(0,0,0,$els[1],$els[2],$els[0]));
    echo $s . '<br>';
}
echo "<br>________________________________________________________________________15_____<br>";
if(!isset($_REQUEST['date2']) and !isset($_REQUEST['date3'])) echo <<<_END
<form action="" method = "GET">
      <input type="date" name="date2" required pattern="\d{2}-\d{2}-\d{2}"><br><br>
      <input type="date" name="date3" required pattern="\d{2}-\d{2}-\d{2}"><br><br>
      <input type="submit">
</form>
_END;
if(isset($_REQUEST['date2']) and isset($_REQUEST['date3'])){
    $els2 = explode('-', $_REQUEST['date2']);
    $els3 = explode('-', $_REQUEST['date3']);
    $sz1 = mktime(0,0,0,$els2[1],$els2[2],$els2[0]);
    $sz2 = mktime(0,0,0,$els3[1],$els3[2],$els3[0]);
    if($sz1>$sz2) echo $_REQUEST['date2'] . " > " . $_REQUEST['date3'];
    if($sz1<$sz2) echo $_REQUEST['date2'] . " < " . $_REQUEST['date3']; 
}
echo "<br>________________________________________________________________________16_____<br>";
$d = '2025-12-31';
echo date('d-m-Y', strtotime($d)) . '<br>';

echo "<br>________________________________________________________________________17_____<br>";
if(!isset($_REQUEST['date4']))echo <<<_END
<form action="" method = "GET">
      <input type="text" name="date4"><br><br>
      <input type="submit">
</form>
_END;
if(isset($_REQUEST['date4'])){
    $date = explode('T', $_REQUEST['date4']);
    echo date('H:i:s', strtotime($date[1])) . ' ';
    echo date('d.m.Y', strtotime($date[0])) . '<br>';
} 

echo "<br>________________________________________________________________________18_____<br>";

$date = date_create('2025-12-31');
date_modify($date, "3 days 1 month");
echo date_format($date, 'd.m.Y') . '<br>';
date_modify($date, "2 day");
echo date_format($date, 'd.m.Y') . '<br>';
date_modify($date, "1 year");
echo date_format($date, 'd.m.Y') . '<br>';
date_modify($date, "-3 days");
echo date_format($date, 'd.m.Y') . '<br>';
echo "<br>________________________________________________________________________19_____<br>";
echo (mktime(0,0,0,1,1,date('y', time())+1) - time())/3600/24;

echo "<br>________________________________________________________________________20_____<br>";
if(!isset($_REQUEST['date20']))echo <<<_END
<form action="" method = "GET">
      <input type="text" name="date20"><br><br>
      <input type="submit">
</form>
_END;
if(isset($_REQUEST['date20'])){
    $y = $_REQUEST['data20']; echo "13FRI: ";
    for($i = 1; $i<13; ++$i){
        if(date('D', mktime(0,0,0,13,$i,$y))=='Fri') echo $month[$i] . ' ';
    } 
}
echo "<br>________________________________________________________________________21_____<br>";
$date = strtotime("-100 days");
echo date('D', $date);









?>
