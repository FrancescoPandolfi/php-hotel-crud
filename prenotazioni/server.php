<?php 
include __DIR__ . "/../database.php";


$query = "SELECT * FROM `prenotazioni`";


$result = $connection->query($query);


if ($result && $result->num_rows >0) {
  $reservations = [];
  while($row = $result->fetch_assoc()) {
    $reservations[] = $row;
  }


} elseif ($result) {
  echo 'Nessun risultato';
} else {
  echo 'Query error';
}

$connection->close();