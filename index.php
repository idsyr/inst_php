<?php
    session_start();
    $name = $_SESSION['name'];
    echo "hello $name!";
    unset($_SESSION['name']);
?>
