<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css" >
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/login.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Strona główna</title>
</head>
<body>

<?php

include "./components/db_conn.php";

?>
    <div class="container-fluid px-0 d-flex justify-content-center">
       <?php 
            include "./templates/navbar.php";
        ?>
        <div class="card loginPanel">
            <div class="card-body">
                <h2 class="card-title text-center">Panel rejestracji</h2>
            </div>
            <div class="card-body">
                <form action="./components/register.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="login">Nazwa użytkownika: </span>
                        <input type="text" class="form-control" name="login" placeholder="login" aria-label="login" aria-describedby="login" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="login">Adres e-mail: </span>
                        <input type="email" class="form-control" name="email" placeholder="email" aria-label="email" aria-describedby="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="pass">Hasło: </span>
                        <input type="password" class="form-control" name="password" placeholder="hasło" aria-label="pass" aria-describedby="pass" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="pass">Potwierdź hasło: </span>
                        <input type="password" class="form-control" name="password-repeat" placeholder="hasło" aria-label="pass" aria-describedby="pass" required>
                    </div>
                    <div class="d-flex justify-content-center" id="loginButton">
                     <button type="submit" class="btn btn-primary">Zarejestruj konto</button>
                    </div>
               </form>
            </div>
        </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>