<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) dir ("bd_connect_error");
$query = "select * from workers"; 
$result = $conn->query($query); if(!$result) die("bd_query_error");
//var_dump($result);
//for($data = []; $row = mysqli_fetch_assoc($result); $data = $row);
for($j = 0; $j<$result->num_rows; ++$j){
    $result->data_seek($j); echo "ID: " .htmlspecialchars($result->fetch_assoc()['ID']).'<br>';
    $result->data_seek($j); echo "name: " .htmlspecialchars($result->fetch_assoc()['name']).'<br>';
    $result->data_seek($j); echo "age: " .htmlspecialchars($result->fetch_assoc()['age']).'<br>';
    $result->data_seek($j); echo "salary: " .htmlspecialchars($result->fetch_assoc()['salary']).'<br><br>';
}
?>
