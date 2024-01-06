<?php
include "./db_conn.php";

$username = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];



$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../login.php?variable=" . $username);

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


  $conn->close();

?>