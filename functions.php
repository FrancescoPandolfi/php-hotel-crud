<?php 
include __DIR__ . '/database.php';

function getAll($connection, $table, $id) {

  $query = "SELECT * FROM $table WHERE `id` = $id";
  $result = $connection->query($query);

  if ($result && $result->num_rows > 0) {

      return $result->fetch_assoc();

  } elseif ($result) {
    return [];
  } else {
    return false;
  }

}