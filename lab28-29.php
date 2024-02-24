<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);

    echo <<<EOL1
<form action="" method="GET">
    your query: <input type="text" name="q" value=""><br>
    <input type="submit">
</form>
EOL1;
if(!empty($_POST)){
    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $salary = $_POST['salary'];
    $query = "insert into workers set name   ='$name', 
                                      age    ='$age',
                                      salary ='$salary'";
    $conn->query($query);
}

    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $query = "DELETE FROM workers WHERE name='$del'";
        $conn->query($query);
    }
    $q = $_REQUEST['q'];
    $result = $conn->query("select * from workers where name like '%$q%'"); // 
    for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    

    $result = '';
    foreach($data as $elem){
        $result .= '<tr>';

        $result .= '<td>' . $elem['ID'    ] . '</td>';
        $result .= '<td>' . $elem['name'  ] . '</td>';
        $result .= '<td>' . $elem['age'   ] . '</td>';
        $result .= '<td>' . $elem['salary'] . '</td>';
        $result .= '<td><a href="?del=' . $elem['name'] . '">rm!</a></td>';

        $result .= '</tr>';
    }

    echo <<<EOL
    <table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    EOL;
    echo $result;
    echo '</table>';


    $add_name   = ""; if(isset($_POST['name'  ])) $add_name   = $_POST['name'  ];
    $add_age    = ""; if(isset($_POST['age'   ])) $add_age    = $_POST['age'   ];
    $add_salary = ""; if(isset($_POST['salary'])) $add_salary = $_POST['salary'];
    
    echo <<<EOL
    <form action="" method="POST">
        <input name="name"   value="$add_name"  >
        <input name="age"    value="$add_age"   >
        <input name="salary" value="$add_salary">
        <input type="submit" value="add worker" >
    </form>
    EOL;
    ?>
