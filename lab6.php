<?php
echo "<br>_____________________________________________________________exa_________<br>";
echo <<<_END
<form action="" method = "GET">
      <input type="text" name="user"><br><br>
      <textarea name="message"></textarea><br><br>
      <input type="submit">
</form>
_END;

$name = ' '; if(isset($_REQUEST['user'])) $name = $_REQUEST['user']; 
echo <<<_END
<form action="" method ="GET">
    <input type="text" name="user" value=$name>
    <input type='submit'>
</form>
_END;

echo "<br>_____________________________________________________________exa_exc_____<br>";
if(!isset($_REQUEST['city'])) echo <<<_EX1
<form action="" method="GET">
  <input type="text" name="city">
  <input type="submit">
</form>
_EX1;
if(!empty($_REQUEST['city'])){
$city = strip_tags($_REQUEST['city']);
echo 'your town: '.$city;
} 

echo "<br>_____________________________________________________________exc_1_______<br>";
echo <<<_EX1
<form action="" method="GET"> 
    <input type="text" name='user' value="your name?">
    <input type="submit">
</form>
_EX1;
if(isset($_REQUEST['user'])){
    $out = $_REQUEST['user'];
    echo "Hello, $out";
}

echo "<br>_____________________________________________________________exc_2_______<br>";
echo <<<_EX2
<form action="" method="GET">
    <input type="text" name="name" value="name?">
    <input type="text" name="age" value="age?">
    <textarea name="message">message?</textarea><br><br>
    <input type="submit">
</form>
_EX2;
if(isset($_REQUEST['name']) and isset($_REQUEST['age'])){
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $message = strip_tags($_REQUEST['message']);
    echo <<<_EX2
    Hello, $name, $age year.
    your message: $message
    _EX2;
}

echo "<br>_____________________________________________________________exc_3_______<br>";
if(!isset($_REQUEST['age']))
    echo <<<_EX3
input your age:
<form action="" method="POST">
    <input type="text" name="age">
    <input type="submit">
</form>
_EX3;
if(isset($_REQUEST['age']))
    echo "your ags is: " . strip_tags($_REQUEST['age']);

echo "<br>_____________________________________________________________exc_4_______<br>";
$login_pass = shell_exec('cat /srv/http/login+pass 2>&1');
echo <<<_EX4
input your passwowrd and login:
<form action="" method="POST">
    <input type="text" name="login">
    <input type="text" name="pass">
    <input type="submit">
</form>
_EX4;
if(trim($_REQUEST['login'] . ' ' . $_REQUEST['pass']) == $login_pass) echo "access allowed for ";
else echo "access denied for ";
echo ' ' . ($_REQUEST['login'] . ' ' . $_REQUEST['pass']); 
echo '<br>true comb: ' . $login_pass;
echo "<br>_____________________________________________________________exc_5_______<br>";

$name = ' '; if(isset($_REQUEST['user'])) $name = $_REQUEST['user']; 
echo <<<_END
<form action="" method ="GET">
    <input type="text" name="user" value=$name>
    <input type='submit'>
</form>
_END;
echo "<br>_____________________________________________________________exc_6_______<br>";
$name = ' '; if(isset($_REQUEST['user'])) $name = $_REQUEST['user']; 
$mes = ' '; if(isset($_REQUEST['message'])) $mes = $_REQUEST['message']; 
echo <<<_END
<form action="" method ="GET">
    <input type="text" name="user" value=$name>
    <textarea name="message">$mes
    </textarea><br><br>
    <input type='submit'>
</form>
_END;

?>
