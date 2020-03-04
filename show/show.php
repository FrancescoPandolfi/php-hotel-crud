<?php
include 'server.php';
include __DIR__ . '/../partials/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <ul>
              <li>ID: <?= $room['id'] ?> </li>
              <li>FLOOR: <?= $room['floor'] ?></li>
              <li>BEDS: <?= $room['beds'] ?></li>
              <li>ROOM NUMBER: <?= $room['room_number'] ?></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>


</body>

</html>