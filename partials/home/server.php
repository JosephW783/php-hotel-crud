<?php

// include db
include __DIR__. '/../database.php';

// utls
include __DIR__.'/../function.php';
$rooms = getAll($conn, 'stanze');