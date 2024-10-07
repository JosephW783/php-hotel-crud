<?php

// connect to db
include __DIR__.'/../database.php';

// utils
include __DIR__.'/../function.php';

//get room id
$id_room = $_GET["id"];
$room = getById($conn, 'stanze', $id_room);