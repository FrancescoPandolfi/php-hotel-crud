<?php

include "database.php";

$idRoom = $_GET['id'];

$query = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
$result = $connection->query($query);

if ($result && $result->num_rows >0) {

    $room = $result->fetch_assoc();

} elseif ($result) {
  echo 'Nessun risultato';
} else {
  echo 'Query error';
}

$connection->close();