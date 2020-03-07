<?php
include '../database.php';
include __DIR__ . '/../partials/header.php';

if (!empty($_GET['id'])) {
  $idRoom = $_GET['id'];
}

$query = "SELECT * FROM `stanze` WHERE `id` = $idRoom";
$result = $connection->query($query);

if ($result && $result->num_rows >0) {
  $room = $result->fetch_assoc();
} elseif ($result) {
  die('id non esistente');
} else {
  echo 'Query error';
}
$connection->close();

?>


<div class="container">
  <div class="row">
  <div class="col-2"></div>
    <div class="col-8">

    <h1 class="mb-4">Update the room N° <?= $room['room_number'] ?></h1>

      <form action="server.php" method="post">
       
      <div class="form-group">
          <label for="roomNumber">Room</label>
          <input type="text" class="form-control" name="roomNumber" required value="<?= $room['room_number'] ?>" >
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Floor</label>
          <input type="text" class="form-control" name="floor" required value="<?= $room['floor'] ?>" >
        </div>  

        <div class="form-group">
          <label for="exampleInputPassword1">Beds</label>
          <input type="text" class="form-control" name="beds" required value="<?= $room['beds'] ?>" >
        </div>
        
        <input type="hidden" name="id" value="<?= $room['id'] ?>">
        <button type="submit" class="btn btn-success">Update</button>
      </form>

  </div>
  <div class="col-2"></div>
</div>

<?php
include __DIR__ . '/../partials/footer.php';
?>