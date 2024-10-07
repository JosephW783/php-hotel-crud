<?php
include __DIR__ .'/../env-example.php';

//Connessione al databse
$conn = new mysqli('localhost:9000', 'username', 'password', $db_name);

//Check connection
if ($conn->connect_error){
    die( " Si è verificato un errore nella connsessione: " . $conn->connect_error);
}

