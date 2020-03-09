<?php
include __DIR__ . "/../database.php";


if (empty($_POST['roomNumber'])) {
  die('No room number');
}
if (empty($_POST['floor'])) {
  die('No floor');
}
if (empty($_POST['beds'])) {
  die('No beds');
}

// Controlla che hai inserito numeri
foreach ($_POST as $value) {
  if (intval($value) == 0) {
    die('Puoi inserire solo numeri');
  }
  
}



$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$query = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) 
VALUES (?, ?, ?, NOW(), NOW())";

$stmt = $connection->prepare($query);
$stmt->bind_param("iii", $roomNumber, $floor, $beds);
$stmt->execute();


$roomId = mysqli_insert_id($connection);

if ($stmt) {
  header('Location:' . $basePath . 'show/show.php?id=' . $roomId . '&insert=true');
} else {
  echo 'KO';
}


$connection->close();
