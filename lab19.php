<?php
echo "<br>____________________________________preg_match_____________<br>";
echo preg_match('#a+#', 'eee aaa bbb'); echo '<br>';
echo preg_match('#a+#', 'eee aaa aa bbb');echo '<br>';
echo preg_match('#a+#', 'eee bbb');echo '<br>';
echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');echo '<br>';
//^...$ - all in
echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-#mail@mail.ru'); echo '<br>';



echo "<br>____________________________________preg_match_all_________<br>";
echo preg_match_all("#a+#", 'eee aaa bbb', $m); var_dump($m); echo '<br>';
echo preg_match_all("#a+#", 'eee aaa aa bbb', $m); var_dump($m); echo '<br>';
echo preg_match_all("#a+#", 'eee bbb', $m); var_dump($m); echo '<br>';



echo "<br>____________________________________third_arg______________<br>";
echo preg_match_all("#a+#", 'eee aaa aa bbb a', $m); var_dump($m); echo '<br>';



echo "<br>____________________________________pockets________________<br>";
echo preg_match_all('#x(a+)x#', 'xax xaax xaaax', $matches);
echo '<br>'; var_dump($matches); echo '<br>';
echo preg_match_all('#[a-z]+\.([a-z]{2,3})#', 'domain.ru site.com hello.by', $matches2);
echo '<br>'; var_dump($matches2); echo '<br>';
echo preg_match_all('#([a-z]+)\.([a-z]{2,3})#', 'domain.ru site.com hello.by', $matches2);
echo '<br>'; var_dump($matches2); echo '<br>';



echo "<br>________________________________preg_replace_pockets_______<br>";
echo preg_replace('#([a-z]+)@([a-z]+)#', '$2@$1', 'a@b aa@bb'); echo '<br>';
echo preg_replace("#[a-z]+#", '!$0!', 'aaa bbb');echo '<br>';



echo "<br>________________________________inside_reg_pockets_________<br>";
echo preg_replace('#([a-z])\1#', '!', 'aaebbc');echo '<br>';



echo "<br>________________________________non_pockets_brackets_______<br>";
echo preg_replace('#(?:ab)+([a-z])#', '!$1!', 'ababx abe');echo '<br>';
echo preg_replace('#(ab)+([a-z])#', '!$1!', 'ababx abe');echo '<br>';
echo preg_replace('#(ab)+([a-z])#', '!$2!', 'ababx abe');echo '<br>';



echo "<br>_____________________________________examples______________<br>";
echo preg_replace('#([a-z]+):(\d+)#', '$2:$1', 'aaa:444 kkk:333'); echo '<br>';
echo preg_replace('#(\d)\1#', '!', '332 441 550');  echo '<br>';



echo "<br>___________________________________1___________________<br>";
echo preg_replace('#([a-z\d]+)@([a-z\d]+)#', '$2@$1', 'aaa@bbb, eee7@kkk');
echo "<br>___________________________________2___________________<br>";
echo preg_replace('#\d#', '$0$0', 'a1b2c3');
echo "<br>___________________________________3__________________<br>";
echo preg_replace('#([a-z\d])\1#', '!', 'aae xxz 33a');
echo "<br>___________________________________4__________________<br>";
echo preg_replace('#(\w)\1+#', 'FIND', 'aaa bcd xxx efg');
echo "<br>___________________________________5___________________<br>";
echo preg_match('#[\w\.-_]+@\w+\.\w{2,5}#', 'mymail@mail.ru');
echo preg_match('#[\w\.-_]+@\w+\.\w{2,5}#', 'my.mail@mail.ru');
echo preg_match('#[\w\.-_]+@\w+\.\w{2,5}#', 'my-mail@mail.ru');
echo preg_match('#[\w\.-_]+@\w+\.\w{2,5}#', 'my_mail@mail.ru');
echo preg_match('#[\w\.-_]+@\w+\.\w{2,5}#', 'mymail@mail.com');
echo preg_match('#[\w\.-_]+@\w+\.\w{2,5}#', 'mymail@yandex.ru');
echo "<br>___________________________________6___________________<br>";
echo preg_match_all('#[\w\.-_]+@\w+\.\w{2,5}#','mymail@mail.ru, my.mail@mail.ru, my-mail@mail.ru, my_mail@mail.ru, mymail@mail.com, mymail@yandex.ru',$m6); echo '<br>'; var_dump($m6);
echo "<br>___________________________________7___________________<br>";
echo preg_match_all('#[\w\-_]+\.[\w]{2,5}#', "site.ru site.com my-site123.com", $o7);
var_dump($o7);
echo "<br>___________________________________8___________________<br>";
preg_match_all('#[\w\-_]+\.[\w\-\_]+\.[\w]{2,5}#', 'hello.site.ru, hello.site.com, hello-my-site.com', $o8);
var_dump($o8);
echo "<br>___________________________________9___________________<br>";
preg_match_all('#http:/{2}[\w\-_]+\.[\w]{2,5}#', 'http://site.ru http://site.com', $o9);
var_dump($o9);
echo "<br>___________________________________10__________________<br>";
preg_match_all('#https{0,1}:/{2}[\w\-_]+\.[\w]{2,5}#', 'http://site.ru http://site.com https://site.com https://site.ru ', $o10);
var_dump($o10);
echo "<br>___________________________________11__________________<br>";
preg_match_all('#https{0,1}:/{2}[\w\-_]+\.[\w]{2,5}/?#', 'http://site.ru http://site.com https://site.com https://site.ru/', $o10);
var_dump($o10);
echo "<br>___________________________________12__________________<br>";
echo preg_match('#https?.*#', 'https://123');
echo "<br>___________________________________13__________________<br>";
echo preg_match("#.*\.[(txt)(html)(php)]#", 'txt.txt');
echo "<br>___________________________________14__________________<br>";
echo preg_match("#.*\.[(jpg)(jpeg)]#", 'gepj.jpeg');
echo "<br>___________________________________15__________________<br>";
echo preg_match("#[1-9]\d{11}#", '112345678999');
echo "<br>___________________________________16__________________<br>";
preg_match_all('#\d+#', '11 f 34 233f', $o16); $res = 0;
foreach($o16[0] as $s) $res+=intval($s); echo $res;
echo "<br>___________________________________17__________________<br>";
echo preg_replace('#(\d+)-(\d+)-(\d+)#', '$1.$2.$3', '31-12-2014');
echo "<br>___________________________________18__________________<br>";
echo preg_replace('#([a-zA-Z\.]+)#', '<a href="$1">$1</a>', 'site.ru');









?>
