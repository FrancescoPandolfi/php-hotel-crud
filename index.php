<?php
  include 'database.php';
  include 'partials/header.php';
?>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">

        <h1>Stanze</h1>

        <table class="table table-dark table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">room_number</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          
          <?php  if (!empty($results)) {
             foreach ($results as $room): ?>
              <tr>
                <td><?=$room['id']?></td>
                <td><?=$room['room_number']?></td>
                <td><a class="badge badge-primary" href="show/show.php?id=<?=$room['id']?>">VIEW</a></td>
                <td><a class="badge badge-success" href="">UPDATE</a></td>
                <td><a class="badge badge-danger" href="">DELETE</a></td>
              </tr>
             <?php endforeach; 
          }?>
          

          </tbody>
        </table>


      </div>
    </div>
  </div>






</body>

</html>