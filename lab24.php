<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die("bd_connect_error");
$qres = $conn->query("describe workers");
$workers; while($row = $qres->fetch_assoc()['Field']){$workers[] = $row;}

query("select * from workers where ID=3");
query("select * from workers where salary=1000");
query("select * from workers where age=23");
query("select * from workers where salary>400");
query("select * from workers where salary>=500");
query("select * from workers where salary!=500");
query("select * from workers where salary<=900");
query("select * from workers where salary<=900");
query("select salary, age from workers where name='Вася'");

query("select * from workers where age>25 and age<=28");
query("select * from workers where name='Петя'");
query("select * from workers where name='Петя' or name='Вася'");
query("select * from workers where name!='Петя'");
query("select * from workers where age=27 or salary=1000");
query("select * from workers where age>=23 and age<27 or salary=1000");
query("select * from workers where age>=23 and age<27 or salary>400 and salary<1000");
query("select * from workers where age=27 or salary!=400");

query("insert into workers set name='Никита', age=22, salary=300");
query("insert into workers(name, salary) values('Светлана', 1200)");
query("insert into workers(name, age, salary) values('Петр', 31, 1000), ('Ярослав', 30, 1200)");

query("delete from workers where id=7");
query("delete from workers where name='Коля'");
query("delete from workers where age=23");

query("update workers set salary=200 where name='Вася'");
query("update workers set age=35 where ID=4");
query("update workers set salary=700 where salary=500");
query("update workers set age=23 where ID<=2 and ID>=5");
query("update workers set salary=900, name='Женя' where name='Вася'");

function query($query){ global $conn;       
    $res = $conn->query($query); 
    if(!$res) die("bd_query_error: $query"); 
    if($query[0]=='s') print_workers($res);
    else echo $res;
}
function print_workers($qres){ global $conn; global $workers;
    for($r = 0; $r<$qres->num_rows; ++$r){
        for($c = 0; $c<count($workers); ++$c)
            print_field($qres, $r, $workers[$c]);
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
