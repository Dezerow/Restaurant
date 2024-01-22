<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css" >
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/login.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Panel logowania</title>
</head>
<body>

<?php

include "./components/db_conn.php";

?>
    <div class="container-fluid px-0 d-flex justify-content-center">
       <?php 
            include "./templates/navbar.php";
            if(isset($_GET['variable'])){
                $username = $_GET['variable'];
            }
        ?>
        <div class="card loginPanel">
            <div class="card-body">
                <h2 class="card-title text-center">Panel logowania</h2>
                <?php if(isset($_GET['variable'])){
                    echo '<h4 id="regSuccess">Rejestracja pomyślna, zaloguj się!</h4>';                
                } 
                if(isset($_GET['error'])){
                    echo '<h4 id="loginError">'.$_GET['error'].'</h4>';                
                }
            ?>
            </div>
            <div class="card-body">
                <form method="POST" action="./components/login.php">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="login">Login: </span>
                        <input type="text" class="form-control" name="login" placeholder="login" <?php if(!empty($username && $username!=='root')){
                            echo "value=$username";
                        } ?> aria-label="login" aria-describedby="login">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="pass">Hasło: </span>
                        <input type="password" name="password" class="form-control" placeholder="hasło" aria-label="pass" aria-describedby="pass">
                    </div>
                    <div class="d-flex justify-content-center" id="loginButton">
                    <button type="submit" class="btn btn-primary">Zaloguj się</button>
                    </div>
                </form>
            </div>
        </div>         
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>