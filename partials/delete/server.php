<?php

//Connect db_name
include __DIR__ .'/../database.php';

//Utils
include __DIR__ . '/../functions.php';

//Get room id from POST request
if(empty($_POST['id'])){
    die('ID non corretto');
}

$id_room = $_POST['id'];
$url = "$base_path?del=room";

// Prepara la query SQL per eliminare la stanza
$sql = "DELETE FROM stanze WHERE id = :id";

// Prepara la dichiarazione SQL
$stmt = $conn->prepare($sql);

// Bind del parametro :id alla variabile $id_room, viene utilizzato per collegare l'area di archiviazione dell'applicazione all'indicatore del parametro
$stmt->bind_param(':id', $id_room, PDO::PARAM_INT);

// Eseguo la query
if($stmt->execute()) {
    echo "Stanza eliminata con successo!";
    header("Location: $url"); // Reindirizza dopo la cancellazione
    exit;
} else {
    echo " Errore nell'eliminazione della pagina!";
}


