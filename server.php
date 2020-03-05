<?php

include 'database.php';

$query = "SELECT * FROM `stanze`";
$result = $connection->query($query);

if ($result && $result->num_rows >0) {
  $results = [];
  while($row = $result->fetch_assoc()) {
    $results[] = $row;
  }


} elseif ($result) {
  echo 'Nessun risultato';
} else {
  echo 'Query error';
}

$connection->close();