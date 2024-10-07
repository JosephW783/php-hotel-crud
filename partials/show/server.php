<?php

// connect to db
include __DIR__.'/../database.php';

// utils
include __DIR__.'/../functions.php';



function getById($conn, $table, $id) {
    // Prepara la query SQL per selezionare un record specifico
    $sql = "SELECT * FROM $table WHERE id = :id LIMIT 1";
    
    // Prepara la query per l'esecuzione
    $stmt = $conn->prepare($sql);
    
    // Associa il parametro id
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    // Esegui la query
    $stmt->execute();
    
    // Ritorna il risultato come array associativo
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Verifica la presenza del parametro id
if (empty($_GET['id'])) {
    die('ID non corretto o mancante');
}
// Ottieni l'id della stanza
$id_room = $_GET['id'];

// Ottieni i dettagli della stanza
$room = getById($conn, 'stanze', $id_room);

if ($room) {
    echo "Nome stanza: " . $room['nome'] . "<br>";
    echo "Descrizione: " . $room['descrizione'] . "<br>";
} else {
    echo "Stanza non trovata.";
}