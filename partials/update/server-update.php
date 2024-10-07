<?php

// connect to database
include_once __DIR__.'/../database.php';

// Check id
if(empty($_POST['id'])){
    die("Id non esistente");
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//Update prepare statements
$sql = "UPDATE `stanze`
        SET `room_number`= ?, `beds` = ?,`floor` = ?, `updated_at` = NOW()
        WHERE `id` = ?";
//

$stmt = $conn->prepare($sql);
$stmt->bind_param('iiii', $room_number, $beds, $floor, $id_room);
$stmt->execute();

if($stmt && $conn->affected_rows > 0){
  header("Location: $base_path" . "show.php?id=$id_room ");
}elseif($stmt){
  die("Nessuna room trovata");
}else{
  die("Si è verificato un errore");
}
//close connection
$conn->close();