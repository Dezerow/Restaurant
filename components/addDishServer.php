<?php
include "./db_conn.php";

$dishName = $_POST['dishName'];
$dishDesc = $_POST['dishDesc'];
$dishPrice = $_POST['dishPrice'];
$dishType = $_POST['dishType'];


// $checkSql = "SELECT Name FROM $dishType WHERE Name='$dishName";
// $resultOfDishCheck = mysqli_query($conn, $checkSql);
// if(mysqli_num_rows($resultOfDishCheck)!=0){
//     header("Location: ../register.php?error=Danie znajduje się już w bazie danych.");
// }
    $sql;
    if($dishType!=="soups"){
        $sql = "INSERT INTO $dishType (Name, Description, Price) VALUES ('$dishName', '$dishDesc', '$dishPrice')";
    }else{
        $sql = "INSERT INTO $dishType (Name, Price) VALUES ('$dishName', '$dishPrice')";
    }

  if ($conn->query($sql) === TRUE) {
      header("Location: ../dishesEdit.php?variable='$dishPrice'");
  
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

  $conn->close();

?>