<?php
include 'env.php';


// Connect
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection && $connection->connect_error) {
  echo "Errore di connessione: " . $connection->connect_error;
  die();
}

