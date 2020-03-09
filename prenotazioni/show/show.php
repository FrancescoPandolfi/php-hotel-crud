<?php
include 'server.php';
include __DIR__ . '/../../partials/header.php';
?>



  <div class="container">
    <div class="row">
      <div class="col-12">

        <h1 class="mb-4"><?= 'Reservation ' . $reservation['id'].  ' details' ?></h1>
        <div class="card">
          <div class="card-body">
            <ul>
              <li>RESRVATION ID: <?= $reservation['id'] ?> </li>
              <li>ROOM NUMBER: <?= $reservation['room_number'] ?></li>
              <li>NAME: <?= $reservation['name'] ?></li>
              <li>LAST NAME: <?= $reservation['lastname'] ?></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>


  <?php
include __DIR__ . '/../../partials/footer.php';
?>