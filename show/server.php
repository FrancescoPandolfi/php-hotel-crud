<?php
include __DIR__ . "/../database.php";
include __DIR__ . "/../functions.php";


$idRoom = $_GET['id'];

$room = getAll($connection, "stanze", $idRoom);

if (empty($room)) {
  die("La stanza con l'id inserito non esiste");
} elseif ($room == false) {
  die("Query error");
}

$connection->close();