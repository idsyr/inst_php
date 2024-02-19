    <?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);

    echo <<<EOL1
<form action="" method="GET">
    your query: <input type="text" name="q" value=""><br>
    <input type="submit">
</form>
EOL1;
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $query = "DELETE FROM workers WHERE id=$del";
        $conn->query($query);
    }
    //$q = $_REQUEST['q'];
    $result = $conn->query("select * from workers"); // where name like '%$q%'
    for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    

    $result = '';
    foreach($data as $elem){
        $result .= '<tr>';

        $result .= '<td>' . $elem['id'] . '</td>';
        $result .= '<td>' . $elem['name'] . '</td>';
        $result .= '<td>' . $elem['age'] . '</td>';
        $result .= '<td>' . $elem['salary'] . '</td>';
        $result .= '<td><a href="?del=' . $elem['id'] . '">rm!</a></td>';

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

    ?>
