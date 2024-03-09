<?php
session_start(); 


include "./db_conn.php";

$id = $_POST['id'];
$type = $_POST['type'];


$sqlDish = "SELECT * FROM $type WHERE Id='$id'";
$result = mysqli_query($conn, $sqlDish);


if(mysqli_num_rows($result)===1){
    if(isset($_POST['dishName']) && $_POST['dishName']!==""){
        $Name = $_POST['dishName'];
        $update = "UPDATE $type SET Name='$Name' WHERE id=$id";       
        if ($conn->query($update) === TRUE) {
            header("Location: ../dishesEdit.php?result=Edycja zakończona pomyślnie.");
          } else {
            header("Location: ../dishesEdit.php?result='Błąd edycji.'");
          }
    }

    if(isset($_POST['dishDesc']) && $_POST['dishDesc']!==""){
        $Description = $_POST['dishDesc'];
        $update = "UPDATE $type SET Description='$Description' WHERE id=$id";
        if ($conn->query($update) === TRUE) {
            header("Location: ../dishesEdit.php?result=Edycja zakończona pomyślnie.");
          } else {
            header("Location: ../dishesEdit.php?result='Błąd edycji.'");
          }
    }

    if(isset($_POST['dishPrice']) && $_POST['dishPrice']!==""){
        $Price = $_POST['dishPrice'];
        $update = "UPDATE $type SET Price='$Price' WHERE id=$id";
        if ($conn->query($update) === TRUE) {
            header("Location: ../dishesEdit.php?result=Edycja zakończona pomyślnie.");
          } else {
            header("Location: ../dishesEdit.php?result='Błąd edycji.'");
          }
    }
}else{
    header("Location: ../dishesEdit.php?result='Brak dania z wybranym Id w bazie danych.'");
}


  $conn->close();

?>