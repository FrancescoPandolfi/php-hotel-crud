<?php
include 'env.php';


// Connect
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection && $connection->connect_error) {
  echo "Errore di connessione: " . $connection->connect_error;
  die();
}

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