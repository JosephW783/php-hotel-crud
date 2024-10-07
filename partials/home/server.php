<?php

// include db
include __DIR__. '/../database.php';

// utls
include __DIR__.'/../functions.php';

$rooms = getAll($conn, 'stanze');