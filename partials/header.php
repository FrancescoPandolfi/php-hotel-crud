<?php
  include_once __DIR__ . "/../env.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="<?= $basePath ?>dist/app.css">
</head>

<body>

  <nav class="navbar navbar-dark bg-dark mb-5">
  <a class="navbar-brand" href="http://localhost:8888/php-hotel-crud">Hotel Booleana</a>
    <ul class="nav">
      <li>
        <a class="nav-link" href="<?= $basePath ?>insert/insert.php">Add new room</a>
      </li> 
      <li>
        <a class="nav-link" href="<?= $basePath ?>prenotazioni">RESERVATIONS</a>
      </li>
      <li>
        <a class="nav-link" href="<?= $basePath ?>">Back to Home</a>
      </li>
    </ul>
</nav>
