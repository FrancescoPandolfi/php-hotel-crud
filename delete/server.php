<?php

include __DIR__ . "/../database.php";

if (empty($_POST['id'])) {
  die('NO ID');
}

$idRoom = $_POST['id'];

// Cerca il numero di stanza della stanza da cancellare
$querySelect = "SELECT `room_number` FROM `stanze` WHERE `id` = $idRoom";
$result2 = $connection->query($querySelect);

if ($result2 && $result2->num_rows > 0) {
  $roomNumber = $result2->fetch_assoc();
}

// Cancella dal database la stanza con l'id passato in post
$query = "DELETE FROM `stanze` WHERE `id` = $idRoom";
$result = $connection->query($query);

if ($result) {
  header("Location: $basePath?roomNumber=$roomNumber[room_number]");
} else {
  echo 'KO';
}

$connection->close();
