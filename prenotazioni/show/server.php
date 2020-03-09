<?php
include __DIR__ . "/../../database.php";
include __DIR__ . "/../../functions.php";


$idReservation = $_GET['id'];


$query = "SELECT `prenotazioni`.`id`, `stanze`.`room_number`, `ospiti`.`name`, `ospiti`.`lastname`
FROM `prenotazioni`
INNER JOIN `stanze`
ON `prenotazioni`.`stanza_id` = `stanze`.`id`
INNER JOIN `prenotazioni_has_ospiti`
ON `prenotazioni`.`id` = `prenotazioni_has_ospiti`.`prenotazione_id`
INNER JOIN `ospiti`
ON `prenotazioni_has_ospiti`.`ospite_id` = `ospiti`.`id`
WHERE `prenotazioni`.`id` = $idReservation";


$result = $connection->query($query);

if ($result && $result->num_rows > 0) {

     $reservation = $result->fetch_assoc();

} elseif ($result) {
  die("La stanza con l'id inserito non esiste");
} else {
  die("Query error");
}



$connection->close();