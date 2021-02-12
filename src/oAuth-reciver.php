<?php

function intialize($modo) {
    $rand1=rand(100000000000001, 99999999999999);
    $rand2=rand(100000000000001, 99999999999999);
    $rand="$rand1$rand2";
    $mystudents-session-key="mystudents-oauth-cache.$modo.$rand";
}

function open($sito, $app) {
  if ($sito == "MyStudents") {
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, 'https://mystudents.ml/tools/oAuth/auth-loader.init.php');
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_exec($ch);
     curl_close($ch);
 } else {
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, 'https://mystudents.ml/API/' .$app. '.init.php');
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_exec($ch);
     curl_close($ch);
 }
}
 
 function start($app) {
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, 'https://mystudents.ml/API/redirect/oAuth/' .$app. '.php');
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_exec($ch);
     curl_close($ch);
 }
 
 function stop($end) {
     curl_close($ch);
 }
 
 function close($sito, $app) {
     echo "chiuso!";
 }
 
 function end($app) {
     echo "MyStudents API - Terminated";
 }
 
 
 
 ?>
