<?php

//Connect db_name
include __DIR__ . '/../database.php';

//Check database
if(empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor']) ){
    dir ('Missing parameters');
}

$room_number = $_POST['room_number'];
$beeds = $_POST['beds'];
$floor = $_POST['floor'];

$sql = "INSERT INTO 'stanze' ('room_number', 'beds', 'floor', 'created_at', 'updated_at' )
VALUES (?,?,?, NOW() );";

//

$stmt = $conn->prepare($sql);
$stmt->bind_param('iii', $room_number, $beeds, $floor);
$stmt->execute();

if ($stmt && $stmt->insert_id) {
    $id_room = $stmt->insert_id;
    header("Location: $base_path" . "show.php?id=$id_room");
  } else {
    die("Room creation error");
  }