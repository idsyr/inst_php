<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die("bd_connect_error");
$qres = $conn->query("describe workers");
$fields; while($row = $qres->fetch_assoc()['Field']){$fields[] = $row;} $fields = 'count';

query("select * from workers where ID>=0 limit 6");
query("select * from workers where ID>1 limit 3");
query("select * from workers where ID>=0 order by salary");
query("select * from workers where ID>=0 order by salary desc");
query("select * from workers where ID>=2 limit 4 order by age");
query("select count(*) as count from workers");
query("select count(*) as count from workers where salary=300");
query("select * from pages where author like '%ов'");
query("select * from pages where article like '%элемент%'");
query("select * from workers where name like 'я%'");


function query($query){ global $conn;       
    $res = $conn->query($query); 
    if(!$res) die("bd_query_error: $query"); 
    if($query[0]=='s') print_workers($res);
    else echo $res;
}
function print_query($qres){ global $conn; global $fields;
    for($r = 0; $r<$qres->num_rows; ++$r){
        for($c = 0; $c<count($fields); ++$c)
            print_query($qres, $r, $fields[$c]);
        echo '<br>';
    }
    echo "_________________________________________________<br>";
}
function get_field($qres, $record, $field){
    $qres->data_seek($record);
    return htmlspecialchars($qres->fetch_assoc()[$field]);
}
function print_field($qres, $record, $field){
    $res = get_field($qres, $record, $field);
    if($res) echo "$field: ".$res.'<br>';
}
?>
