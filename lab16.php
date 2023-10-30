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
function ex2(){
echo "choose what you know";
echo <<<EOL1
<form action="" method="GET">
    <input type="hidden" name="getinfo" value="1">
    html <input type="checkbox" name="html1" value="1"><br>
    css  <input type="checkbox" name="css1" value="1"><br>
    php  <input type="checkbox" name="php1" value="1"><br>
    js   <input type="checkbox" name="js1"  value="1"><br>
    <input type="submit">
</form>
EOL1;
if(isset($_REQUEST['getinfo'])){
    $html = false; $css = false; $php = false; $js = false;
    if(isset($_REQUEST['html1'])) $html = true;
    if(isset($_REQUEST['css1']))  $css  = true;
    if(isset($_REQUEST['php1']))  $php  = true;
    if(isset($_REQUEST['js1']))   $js   = true;
    echo "you know: ";
    if(!$html and !$css and !$php and !$js) echo "nothing";
    if($html) echo "html ";
    if($css)  echo "css ";
    if($php)  echo "php ";
    if($js)   echo "js ";} 
} ex2();
echo '<br>_________________________________3_____________<br>';
function ex3(){
echo <<<EOL
<form action="" method="GET">
    do you know php?<br>
    yes <input type="radio" name="php+" value="1" checked><br>
    no <input type="radio" name="php+" value="0"><br>
    <input type="submit">
</form>
EOL;
if(isset($_REQUEST['php+'])){
    if($_REQUEST['php+']=="1") echo "ypi now";
    else echo "you dont now";
}
} ex3();
echo '<br>_________________________________4_____________<br>';
function ex4(){
echo <<<EOL
<form action="" method="GET">
    age?<br>
    less 20 <input type="radio" name="age" value="1" checked><br>
    20 - 25 <input type="radio" name="age" value="2"><br>  
    25 - 30 <input type="radio" name="age" value="3"><br>
    more 30 <input type="radio" name="age" value="4"><br>
<input type="submit">
</form>
EOL;
if(isset($_REQUEST['age'])){
    if($_REQUEST['age']=="1") echo "less 20";
    if($_REQUEST['age']=="2") echo "20 - 25";
    if($_REQUEST['age']=="3") echo "25 - 30";
    if($_REQUEST['age']=="4") echo "more 30";
}
} ex4();
echo '<br>_________________________________5_____________<br>';
function ex5(){
echo <<<EOL
<form action="" method="GET">
    age?<br>
    <select name="age2">
        <option value="less 20">less 20</option>
        <option value="20 - 25">20 - 25</option>
        <option value="25 - 30">25 - 30</option>
        <option value="more 30">more 30</option>
    </select>
<input type="submit">
</form>
EOL;
if(isset($_REQUEST['age2'])){
    if($_REQUEST['age2']=="less 20") echo "less 20";
    if($_REQUEST['age2']=="20 - 25") echo "20 - 25";
    if($_REQUEST['age2']=="25 - 30") echo "25 - 30";
    if($_REQUEST['age2']=="more 30") echo "more 30";
}
} ex5();

echo '<br>_________________________________6_____________<br>';
function ex6(){
echo <<<EOL
<form action="" method="GET">
    age?<br>
    <select multiple name="choo">
        <option value="html">html</option>
        <option value="php">php</option>
        <option value="css">css</option>
        <option value="js">js</option>
    </select>
<input type="submit">
</form>
EOL;
if(isset($_REQUEST['choo'])){
    $html = false; $css = false; $php = false; $js = false;
    if($_REQUEST['choo']=="html") $html = true;
    if($_REQUEST['choo']=="css")  $css  = true;
    if($_REQUEST['choo']=="php")  $php  = true;
    if($_REQUEST['choo']=="js")   $js   = true;
    echo "you know: ";
    if(!$html and !$css and !$php and !$js) echo "nothing";
    if($html) echo "html ";
    if($css)  echo "css ";
    if($php)  echo "php ";
    if($js)   echo "js ";} 
} ex6();





?>
