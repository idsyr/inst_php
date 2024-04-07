<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);

    if(!empty($_POST['pass']) and !empty($_POST['name'])){
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        
        $res = $conn->query("select * from users where 
                                                 name='$name' and 
                                                 pass='$pass'");
        $user_exist = !empty(mysqli_fetch_assoc($res));
        if($user_exist){
            session_start();
            $_SESSION['name'] = $name;
            header("Location: index.php");
            die();
        } else {
            echo "ERROR: wrong name or pass";
        }
          
    }
    echo <<<LINE
    <form action="" method="POST">
        <input name="name">
        <input name="pass" type="password">
        <input type="submit" value="_____">
    </form>  
    LINE;  
?>
