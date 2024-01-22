<?php
include "./db_conn.php";

$username = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];


$checkSql = "SELECT username FROM users WHERE username='$username'";
$resultOfUsernameCheck = mysqli_query($conn, $checkSql);
$checkSql2 = "SELECT username FROM users WHERE email='$email'";
$resultOfEmailCheck = mysqli_query($conn, $checkSql2);
if(mysqli_num_rows($resultOfUsernameCheck)!=0){
    header("Location: ../register.php?error=Nazwa użytkownika jest już używana.");
}else if(mysqli_num_rows($resultOfEmailCheck)!=0){
  header("Location: ../register.php?error=Adres e-mail jest już używany.");
}else{
  $sql = "INSERT INTO users (username, email, password, points) VALUES ('$username', '$email', '$pass', 30)";

  if ($conn->query($sql) === TRUE) {
      header("Location: ../login.php?variable=" . $username);
  
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}







  $conn->close();

?>