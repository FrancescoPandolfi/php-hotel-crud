<?php
include 'database.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="dist/app.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">


        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">room_number</th>
              <th scope="col">floor</th>
              <th scope="col">beds</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach ($results as $value): ?>
            <tr>
              <td><?=$value['id']?></td>
              <td><?=$value['room_number']?></td>
              <td><?=$value['floor']?></td>
              <td><?=$value['beds']?></td>
            </tr>
          <?php endforeach ?>

          </tbody>
        </table>


      </div>
    </div>
  </div>






</body>

</html>