<?php
session_start(); 


include "./db_conn.php";

$username = $_POST['login'];
$pass = $_POST['password'];



$sqlUserExist = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sqlUserExist);

if (mysqli_num_rows($result) === 1) {
    $row= mysqli_fetch_assoc($result);    
    if($row['username'] === $username && $row['password']===$pass){
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");
    }else{
        header("Location: ../login.php?error=Niepoprawne dane logowania");
    }
}else{
    $sql2 = "SELECT * FROM admins WHERE username='$username'";
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) === 1) {
        $row2= mysqli_fetch_assoc($result2);

        if($row2['username'] === $username && $row2['password']===$pass){
            $_SESSION['adminname'] = $row2['username'];
            header("Location: ../index.php");
           
        }else{
            header("Location: ../login.php?error=Niepoprawne dane logowania");
        }
    }else{
        header("Location: ../login.php?error=Brak użytkownika w bazie danych");
    }
}



  $conn->close();

?>