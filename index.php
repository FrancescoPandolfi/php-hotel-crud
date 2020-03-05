<?php
include 'server.php';
include 'partials/header.php';
?>



<div class="container">

<?php if (!empty($_GET['roomNumber'])): ?>
  <div class="row">
    <div class="col-12 alert alert-danger">
        Hai cancellato la stanza N° <?= $_GET['roomNumber'] ?>
    </div>
  </div>
<?php endif; ?>
  


  <div class="row">
    <div class="col"></div>
    <div class="col-10">

      <h1 class=" text-center">Stanze</h1>

      <table class="table table-dark table-bordered mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ROOM NUMBER</th>
            <th scope="col">FLOOR</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <?php if (!empty($results)) {
            foreach ($results as $room) : ?>
              <tr>
                <td><?= $room['id'] ?></td>
                <td><?= $room['room_number'] ?></td>
                <td><?= $room['floor'] ?></td>
                <td><a class="badge badge-primary" href="show/show.php?id=<?= $room['id'] ?>">VIEW</a></td>
                <td><a class="badge badge-success" href="">UPDATE</a></td>
                <td>
                  <form action="delete/server.php" method="post">
                    <input type="hidden" name="id" value="<?= $room['id'] ?>">
                    <button class="btn-danger" type="submit">DELETE</button>
                  </form>

                </td>
              </tr>
          <?php endforeach;
          } ?>


        </tbody>
      </table>


    </div>
    <div class="col"></div>
  </div>
</div>



<?php include 'partials/footer.php' ?>