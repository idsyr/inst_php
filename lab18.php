<?php
echo preg_replace('#xa{1,2}x#', '!', 'xx xax xaax xaaax').'<br>';
echo preg_replace('#xa{2,}x#', '!', 'xx xax xaax xaaax').'<br>';
echo preg_replace('#xa{2}x#', '!', 'xx xax xaax xaaax').'<br>';
echo preg_replace('#xaax#', '!', 'xx xax xaax xaaax').'<br>';
echo preg_replace('#xaaaaaaaaaa#', '!', 'xaaaaaaaaaa#').'<br>';
echo preg_replace('#xa{10}x#', '!', 'xaaaaaaaaaa#').'<br>';
echo preg_replace('#xa{1,2}x#', '!', 'xx xax xaax xaaax').'<br>';
echo preg_replace('#\d+#', '!', '1 12 123 @@@').'<br>';
echo preg_replace('#\D+#', '!', '123abc3@@').'<br>';
echo preg_replace('#\s#', '!', '1 12 123 @@@').'<br>';
echo preg_replace('#\S#', '!', '1 12 123 @@@').'<br>';
echo preg_replace('#\w#', '!', '1 12 123 @@@').'<br>';
echo preg_replace('#\W#', '!', '1 12 123 @@@').'<br>';
echo preg_replace('#[abc]xx#', '!', 'axx bxx cxx exx').'<br>';
echo preg_replace('#[^abc]xx#', '!', 'axx bxx cxx exx').'<br>';
echo preg_replace('#[^d]xx#', '!', 'axx bxx ^xx dxx').'<br>';
echo preg_replace('#[d^]xx#', '!', 'axx bxx ^xx dxx').'<br>';
echo preg_replace('#[\^d]xx#', '!', 'axx bxx ^xx dxx').'<br>';
echo preg_replace('#[a-zA-Z-]xx#', '!', 'axx Axx -xx @xx').'<br>';
echo preg_replace('#[a-z-0-9]xx#', '!', 'axx 9xx -xx @xx').'<br>';
echo preg_replace('#[\da-z]xx#', '!', '3xx axx Axx').'<br>';
echo preg_replace('#[.a]+xx#', '!', '.xx ..xx .a.xx bxx').'<br>';
echo preg_replace('#[а-яА-Я]яя#u', '!', 'аяя еяя 2яя').'<br>';
echo preg_replace('#^aaa#', '!', 'aaa aaa aaa').'<br>';
echo preg_replace('#aaa$#', '!', 'aaa aaa aaa').'<br>';
echo preg_replace('#^a+$#', '!', 'aaa').'<br>';
echo preg_replace('#a|b+|c#', '!', 'bbbb').'<br>';
echo preg_replace('#(a|b+)xx#', '!', 'axx bxx bbxx exx').'<br>';
echo preg_replace('#\b[a-z]+\b#', '!', 'axx bxx xx exx').'<br>';
echo preg_replace('#\S+#', '!', 'axx bxx xxx exx').'<br>';
echo preg_replace('#\\\\#', '!', '\\ \\ \\\\').'<br>';
echo preg_replace('#a+#', '!', 'a aa aaa aaaa', 2).'<br>';
echo preg_replace('#a+#', '!', 'a aa aaa aaaa', 3).'<br>';
echo '________________________________________________________{,}_________<br>';
echo preg_replace('#ab{2,4}a#','!','aa aba abba abbba abbbba abbbbba').'<br>';
echo preg_replace('#ab{1,3}a#','!','aa aba abba abbba abbbba abbbbba').'<br>';
echo preg_replace('#ab{4,}a#','!','aa aba abba abbba abbbba abbbbba').'<br>';
echo '________________________________________________________sSwWdD_________<br>';
echo preg_replace('#a\da#','!','a1a a2a a3a a4a a5a aba aca').'<br>';
echo preg_replace('#a\d+a#', '!', 'a1a a22a a333a a4444a a55555a aba aca').'<br>';
echo preg_replace('#a\d*a#', '!', 'aa a1a a22a a333a a4444a a55555a aba aca').'<br>';
echo preg_replace('#a\Db#', '!', 'avb a1b a2b a3b a4b a5b abb acb').'<br>';
echo preg_replace('#a\Wb#', '!', 'ave a#b a2b a$b a4b a5b a-b acb').'<br>';
echo preg_replace('#\s#', '!', 'ave a#a a2a a$a a4a a5a a-a aca').'<br>';
echo '________________________________________________________[]^-_________<br>';
echo preg_replace('#a[bex]a#', '!', 'aba aea aca aza axa').'<br>';
echo preg_replace('#a[b\.\+\*]a#', '!', 'aba aea aca aza axa a.a a+a a*a').'<br>';
echo preg_replace('#a[3-7]a#', '!', '').'<br>';
echo preg_replace('#a[a-g]a#', '!', '').'<br>';
echo preg_replace('#a[a-fj-z]a#', '!', '').'<br>';
echo preg_replace('#a[a-fA-Z]a#', '!', '').'<br>';
echo preg_replace('#a[^e^x]a#', '!', 'aba aea aca aza axa a-a a#a').'<br>';
echo preg_replace('#w[а-я]w#u', '!', 'wйw wеw wяw wqw').'<br>';
echo preg_replace('##', '!', '').'<br>';
echo '________________________________________________________[a-zA-Z]_________<br>';
echo preg_replace('#a[a-z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa').'<br>';
echo preg_replace('#a[a-zA-Z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa').'<br>';
echo preg_replace('#a[a-z0-9]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa').'<br>';
echo '________________________________________________________^$_________<br>';
echo preg_replace('#^aaa#', '!', 'aaa aaa aaa').'<br>';
echo preg_replace('#aaa$#', '!', 'aaa aaa aaa').'<br>';
echo '________________________________________________________|_________<br>';
echo preg_replace('#a(x|e)+a#', '!', 'aeeea aeea aea axxa axxxa').'<br>';
echo preg_replace('#a(x*|e{2})a#', '!', 'aeeea aeea aea axxa axxxa').'<br>';
echo '________________________________________________________bB_________<br>';
echo preg_replace('#\b#', '!', 'xbx aca aea abba adca abea').'<br>';
echo '________________________________________________________slash_________<br>';
echo preg_replace('#a\\\\a#', '!', 'a\a abc').'<br>';
echo preg_replace('#a\\\\+a#', '!', 'a\a a\\a a\\\a').'<br>';
echo '________________________________________________________last_________<br>';
echo preg_replace('#/\w*\\\\#', '!', 'bbb /aaa\\ bbb /ccc\\').'<br>';
echo preg_replace('#<b>[\w\s]*</b>#', '!', 'bbb <b> hello </b>, <b> world </b> eee').'<br>';


?>
