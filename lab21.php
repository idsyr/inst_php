<?php
session_start();
if(isset($_SESSION['test']))echo $_SESSION['test'];
if(isset($_SESSION['time']))echo time() - $_SESSION['time'] . 's<br>';
$_SESSION['test'] = 'last start ago: ';
$_SESSION['time'] = time();
if(!isset($_SESSION['counter'])) $_SESSION['counter'] = 1;
else $_SESSION['counter'] = $_SESSION['counter'] + 1;
echo 'reloads: ' . $_SESSION['counter'].'<br>';
$country;
if(isset($_SESSION['country'])) $country = $_SESSION['country'];
echo <<< END
<form action="" method="POST">
    your country: <input type="text" name="country" value=$country>
    <input type="submit">
</form>
END;
if(isset($_REQUEST['country']))$_SESSION['country'] = $_REQUEST['country']; 
echo <<< END
<form action="" method="POST">
    email: <input type="text" name="email">
    <input type="submit">
</form>
END;
if(isset($_REQUEST['email']))$_SESSION['email'] = $_REQUEST['email'];
$email = $_SESSION['email'];
echo <<< END
<form action="" method="POST">
    <label for="name1">First Name: </label>
    <input type="text" name="name1"><br>
    <label for="name2">Second Name: </label>
    <input type="text" name="name2"><br>
    <label for="password">Password: </label>
    <input type="text" name="password"><br>
    <label for="email">Email: </label>
    <input type="text" name="email" value=$email><br>
    <input type="submit">
</form>
END;
?>
<a href="lab21_your_country.php">lab21_your_country</a>
