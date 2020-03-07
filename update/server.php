<?php
include __DIR__ . "/../database.php";


if (empty($_POST['id'])) {
  die('Id non inserito');
}
if (empty($_POST['roomNumber'])) {
  die('No room number');
}
if (empty($_POST['floor'])) {
  die('No floor');
}
if (empty($_POST['beds'])) {
  die('No beds');
}

$roomId = $_POST['id'];
$query = "SELECT * FROM `stanze` WHERE `id` = $roomId";

$result = $connection->query($query);

if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
} elseif ($result) {
  die('id non esistente');
} else {
  echo 'Query error';
}


$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$query = "UPDATE `stanze`
SET `room_number` = $roomNumber, `beds` = $floor, `floor` = $beds
WHERE `id` = $roomId";

$result = $connection->query($query);

if ($result) {
  header("Location: $basePath/show/show.php?id=$roomId");
} else {
  echo 'KO';
}


$connection->close();