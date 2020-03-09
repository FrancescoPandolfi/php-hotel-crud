<?php
include 'server.php';
include __DIR__ . '/../partials/header.php';
?>



  <div class="container">

  <?php if (!empty($_GET['insert'])): ?>
    <div class="message alert-success p-3 rounded border border-success">
      You have successfully added a room
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


  <?php
include __DIR__ . '/../partials/footer.php';
?>