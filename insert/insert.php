<?php
include '../database.php';
include __DIR__ . '/../partials/header.php';
?>


<div class="container">
  <div class="row">
  <div class="col-2"></div>
    <div class="col-8">

    <h1 class="mb-4">Add a new room</h1>

      <form action="server.php" method="post">
       
      <div class="form-group">
          <label for="roomNumber">Room</label>
          <input type="text" class="form-control" name="roomNumber" required value="" >
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Floor</label>
          <input type="text" class="form-control" name="floor" required value="" >
        </div>  

        <div class="form-group">
          <label for="exampleInputPassword1">Beds</label>
          <input type="text" class="form-control" name="beds" required value="" >
        </div>
        
        <button type="submit" class="btn btn-success">Add</button>
      </form>

  </div>
  <div class="col-2"></div>
</div>

<?php
include __DIR__ . '/../partials/footer.php';
?>