<?php
// inizializzo cURL
$ch = curl_init();

// imposto la URL della risorsa remota da scaricare
curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/FoxWorn3365/MyStudents-Wrapper/oAuth3/src/oAuth3-authentication.php');

// imposto che non vengano scaricati gli header
curl_setopt($ch, CURLOPT_HEADER, 0);

// eseguo la chiamata
$contenuto = curl_exec($ch);

// chiudo cURL
curl_close($ch);

echo $contenuto;

?>
