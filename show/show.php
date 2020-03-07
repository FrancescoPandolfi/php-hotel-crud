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

  <?php if (!empty($_GET['insert'])): ?>
  <div class="row">
    <div class="col-12 alert alert-success">
         <?= 'You have successfully added a room' ?>
    </div>
  </div>
<?php endif; ?>

    <div class="row">
      <div class="col-12">

        <h1 class="mb-4"><?= "Room N° $room[room_number] detail" ?></h1>
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