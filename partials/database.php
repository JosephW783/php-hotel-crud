<?php
include __DIR__ .'/../env-example.php';

//Connessione al databse
$conn = new mysqli($server_name, $username, $password, $db_name);

//Check connection
if ($conn && $conn->connect_error){
    die("si è verificato un errore");
}

