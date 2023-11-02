<?php
session_start();
echo 'your country: ';
if(isset($_SESSION['country'])) echo $_SESSION['country'];
else echo "return back and input";
echo '<br>';
?>
<a href="lab21.php">lab21</a>
