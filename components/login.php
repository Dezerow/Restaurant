<?php
session_start(); 


include "./db_conn.php";

$username = $_POST['login'];
$pass = $_POST['password'];



$sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row= mysqli_fetch_assoc($result);
    echo $username;
    echo $pass;
    if($row['username'] === $username && $row['password']===$pass){
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");
    }else{
        header("Location: ../login.php?error=Niepoprawne dane logowania");
    }
}else{
    header("Location: ../login.php?error=Brak użytkownika w bazie danych");
}



  $conn->close();

?>