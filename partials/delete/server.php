<?php

//Connect db_name
include __DIR__ .'/../database.php';

//Utils
include __DIR__ . '/../functions.php';

//Get room id
if(empty($_POST['id'])){
    die('ID non corretto');
}

$id_room = $_POST['id'];
$url = "$base_path?del=room";

$sql = "DELETE FROM * ($conn, 'stanze', $id_room, $url)";