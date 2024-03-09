<?php

include "db_conn.php";

$id = $_POST['id'];
$type = $_POST['type'];


$sql = "DELETE FROM $type WHERE Id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: ../dishesEdit.php?result=Pomyślnie usunięto danie z oferty.");
} else {
    header("Location: ../dishesEdit.php?result='Błąd podczas usuwania dania z oferty.'");
}

$conn->close();

?>