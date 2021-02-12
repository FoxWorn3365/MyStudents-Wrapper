<?php
session_start();
include("oAuth-reciver.php");

inizialize("sessione");

open("MyStudents_API", "WRAPPER");

setApiKey("<your-api-here>")

start("WRAPPER");

use("MyStudents_API");

$authtoken=$_GET["auth_token"]; // Ricevi un Boolean (true o false)
$mystudentsapi=$_GET["mystudentsapi_status_v1"] // Riveci true o false

$nome=$_GET["nome"];
$cognome=_GET["cognome"];
$email=$_GET["email"];
$username=$_GET["username"];

delApiKey();

stop("WRAPPER");

close("MyStudents", "WRAPPER");

end("sessione");

stop("authVerify_v1");

?>
