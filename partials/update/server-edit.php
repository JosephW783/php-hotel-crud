<?php

// Connect to db
include __DIR__.'/../database.php';

// get room to edit
if(!empty($_GET['id'])){
    $id_room = $_GET['id'];

    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
  $result = $conn->query($sql);

  if($result && $result->num_rows > 0){
    $room = $result->fetch_assoc();
  }
  else{
    die("ID non esistente");
  }
}
else{
  die('Impossibile ottenere stanza da editare');
}
// close connection
$conn->close();

