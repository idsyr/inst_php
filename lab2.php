<?php
  echo strtoupper('minsk') . '<br/>';
  echo mb_strtoupper('минск') . '<br/>';
  echo ucfirst(strtolower('MINSK')) . '<br/>';
  $arr = explode('-', '31-12-2023');
  echo $arr[2] . '.' . $arr[1] . '.' . $arr[0] . '<br/>';
  echo '<br/>';
  
  echo strtoupper('php') . '<br/>';
  echo strtolower('PHP') . '<br/>';
  echo ucfirst('london') . '<br/>';
  echo lcfirst('London') . '<br/>';
  echo ucwords('london is the capital of great britan') . '<br/>';
  echo ucfirst(strtolower('LONDON')) . '<br/>';
  echo '<br/>';
  
  echo strlen('html css php') . '<br/>';
  $password = 'london london 2023';
  if(strlen($password) > 10 || strlen($password) < 5) echo 'incorrect paswsword!' . '<br/>';
  
  $s2 = 'html css php';
  echo substr($s2, 0, 4) . "\t";
  echo substr($s2, 5, 3) . "\t";
  echo substr($s2, 9, 3) . "\t"; echo '<br/>';
  $s3 = 'tglrepweghjy';
  echo substr($s3, -3, 3) . '<br/>';
  $s4 = "https://portal.usue.ru";
  if(substr($s4, 0, 7) == 'http://') echo 'yes';
  else echo 'no';
  echo '<br/>'; 
  if(substr($s4, 0, 7) == 'http://' || substr($s4, 0, 8) == 'https://') echo 'yes';
  else echo 'no';
  echo '<br/>';
  $s5 = 'cat.jpg'; $s5ext = (substr($s5, -4, 4)); 
  if($s5ext == '.png' || $s5ext == '.jpg') echo 'yes';
  else echo 'no'; echo '<br/>';
  $s6 = 'london is the capital of great britan'; 
  if(strlen($s6)>5) echo substr($s6, 0, 5) . '...';
  else echo $s6; echo '<br/>'; echo '<br/>';

  $s7 = '31.12.2013';
  echo str_replace('.', '-', $s7) . '<br/>';
  $s8 = 'abc';
  $s8 = str_replace('a', '1', $s8); 
  $s8 = str_replace('b', '2', $s8); 
  $s8 = str_replace('c', '3', $s8);  
  echo $s8 . '<br/>';
  $nums = array('0','1','2','3','4','5','6','7','8','9');
  $s9 = '1a2b3c4b5d6e7f8g9h0';
  echo str_replace($nums, '', $s9) . '<br/>';
  echo '<br/>';

  $s10 = 'abc'; $s10trans = array('a' => '1', 'b' => '2', 'c' => '3');
  echo strtr($s10, $s10trans) . '<br/>'; echo '<br/>';

  $s11 = 'london is the capital of great britan';  
  echo substr_replace($s11, '!!1', 2, 5) . '<br/>'; echo '<br/>';

  $s12 = 'abc abc abc';
  echo strpos($s12, 'b') . '<br/>'; 
  echo strrpos($s12, 'b') . '<br/>';
  echo strpos($s12, 'b', 3) . '<br/>'; 
  $s13 = 'aaa aaa aaa aaa aaa';
  echo strpos($s13, ' ', strpos($s13, ' ')+1) . '<br/>';   
  echo '<br/>';
  
  $s14 = 'html css php';
  $s15 = explode(' ', $s14);
  echo implode(",", $s15) . '<br/>';
  $date = '2013-12-31';
  echo implode('.', explode('-', $date)) . '<br/>';
  echo '<br/>';

  $s16 = '1234567890';
  $s17 = str_split($s16, 2);
  print_r($s17); echo '<br/>';
  $s18 = str_split($s16);
  print_r($s18); echo '<br/>';
  echo implode('-', str_split($s16, 2)) . '<br/>';
  echo '<br/>';

  echo trim($s11) . '<br/>';
  $s19 = '/php/';
  echo trim($s19, '/') . '<br/>';  
  $s20 = 'words words words.';
  echo rtrim($s20, '.') . '.';
  echo '<br/>';

  echo strrev('12345') . '<br/>';
  function palindrome($s){
    echo strrev($s)==$s;
  } palindrome('level');
  echo '<br/>';
  echo '<br/>';

  echo str_shuffle('qwerty') . '<br/>';
  $chars = 'qwertyuiopasdfghjklzxcvbnm';
  echo substr(str_shuffle($chars), 0, 5);
  echo '<br/>';

  echo number_format('12345678', 0, ' ', ' ');
  echo '<br/>';
  
  for($i = 1; $i<10; ++$i){
    echo str_repeat('x', $i) . '<br/>';
  }
   for($i = 1; $i<10; ++$i){
    echo str_repeat($i, $i) . '<br/>';
  }
  echo '<br/>';

  $s21 =  'html, <b>php</b>, js';
  echo strip_tags($s21) . '<br/>';
  echo strip_tags($s21, '<b><i>') . '<br/>';
  echo htmlspecialchars($s21) . '<br/>';
  echo '<br/>';

  echo chr(mt_rand(65, 90)) . '<br/>';
  for($i = 0; $i<10; ++$i){
    echo chr(mt_rand(97, 122));
  } echo '<br/>';
  echo '<br/>';
  
  $s22 = 'ab-cd-ef';
  echo strchr($s22, '-') . '<br/>';
  echo strrchr($s22, '-') . '<br/>';
  $s23 = 'ab--cd--ef';
  echo strstr($s23, '-') . '<br/>';
  echo '<br/>';

  $s24 = 'var_test_text';
  function varStyleConvert($s){
    $sEl = explode('_', $s);
    $ans = $sEl[0];
    $sz = count($sEl);
    for($i = 1; $i<$sz; ++$i){
      $ans = $ans . ucfirst($sEl[$i]);
    }
    return $ans;
  } echo varStyleConvert($s24);

?>


