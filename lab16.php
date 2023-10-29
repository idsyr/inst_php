<form action="" method="GET">
    <input type="hidden" name="hello" value="0">
    <input type="checkbox" name="hello" value="1">
    <input type="submit">
</form>
<?php
echo '<br>_____________________________expl1_____________<br>';
if(isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0)
    echo "checkbox: -";
if(isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1)
    echo "checkbox: +";
echo '<br>_____________________________expl2+3___________<br>';
function input($name, $value){
if(isset($_REQUEST[$name])) $value = $_REQUEST[$name];
return '<input type="text"name="'.$name.'" value="'.$value.'">';}
echo input('age', 25);
echo '<br>_________________________________1_____________<br>';
function sayHello(){ $value1="";
if(isset($_REQUEST['name'])) {$value1 = $_REQUEST['name'];}
echo <<<EOL
<form action="" method="GET">
    <input type="text" name="name" value=$value1>
    say hello? 
    <input type="checkbox" name="hello"
EOL; if(isset($_REQUEST['hello'])) echo "checked"; echo <<<EOL
                                        >
    <input type="submit">
</form>
EOL;

if(isset($_REQUEST['name'])){
    if(isset($_REQUEST['hello'])) echo "hello, $value1";
    else echo "bye, $value1";}
} sayHello();
echo '<br>_________________________________2_____________<br>';





?>
