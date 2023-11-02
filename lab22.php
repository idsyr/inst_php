<?php
setcookie('test', '123...', time()+3600*24*30*365);
echo $_COOKIE['test'].'<br>';
#setcookie('test', '', time());
if(!isset($_COOKIE['vis'])) setcookie('vis', '1', time()+3600); else{
    $vis = $_COOKIE['vis']; echo 'its your '.$vis.' visit of our site!<br>'; 
    ++$vis;
    setcookie('vis',$vis, time()+3600);
}
if(!isset($_COOKIE['bdate'])){
echo <<< END
<form action="" method="POST">
    <input type="date" name="bdate">
    <input type="submit">
</form>
END;
if(isset($_REQUEST['bdate'])) 
{$bdate = $_REQUEST['bdate']; 
setcookie('bdate', $bdate, time()+3600);}
} else { 
$date = $_COOKIE['bdate']; echo 'your Birthday: '.$date.'<br>';
$arr = explode('-', $date);
echo 'days before your Birthday: ';
echo floor((mktime(0,0,0,$arr[1], $arr[2], $arr[0])-time())/24/60/60);
}
?>
