<?php
include 'server.php';
include '../partials/header.php';

?>


<div class="container">
  
  <div class="row">
    <div class="col"></div>
    <div class="col-10">

      <h1 class="text-center">Reservations</h1>

      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ROOM ID</th>
            <th scope="col">CREATED</th>
            <th scope="col">UPDATED</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <?php if (!empty($reservations)) {
            foreach ($reservations as $reservation) : ?>
              <tr>
                <td><?= $reservation['id'] ?></td>
                <td><?= $reservation['stanza_id'] ?></td>
                <td><?= $reservation['created_at'] ?></td>
                <td><?= $reservation['updated_at'] ?></td>
                <td><a class="badge badge-primary" href="show/show.php?id=<?= $reservation['id'] ?>">VIEW</a></td>
              </tr>
          <?php endforeach;
          } ?>


        </tbody>
      </table>


    </div>
    <div class="col"></div>
  </div>
</div>



<?php include '../partials/footer.php' ?>