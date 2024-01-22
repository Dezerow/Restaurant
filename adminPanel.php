<?php 
    session_start();
    if(!isset($_SESSION['adminname'])){
        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css" >
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/userpanel.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Panel administratora</title>
</head>
<body>

<?php

include "./components/db_conn.php";

?>
    <div class="container-fluid px-0 d-flex justify-content-center">
       <?php 
            include "./templates/navbar.php";
            $adminname = $_SESSION['adminname'];

        ?>
        <div class="card userPanel">
            <div class="card-body">
                <h1 class="card-title text-center">Panel administratora</h1>                           
                <h1 id="username"><?php echo $adminname ?></h1>
            </div>
            <div class="card-body mt-3">
                <h2 class="part">Zarządzanie kontem</h2>
                <div class="text-center">
                    <button class="btn btn-primary mt-4 buttons" type="button" data-bs-toggle="collapse" data-bs-target="#newPassword" aria-expanded="false" aria-controls="newPassword">Zmień hasło</button>
                    <div class="collapse" id="newPassword">                        
                        <form action="./components/changePassword" method="POST">
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="login">Nowe hasło: </span>
                                <input type="text" class="form-control" name="newPassword" placeholder="" aria-label="newPassword" aria-describedby="newPassword" required>
                                <button class="btn btn-success" type="submit">Zmień</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-info mt-4 buttons" type="button" data-bs-toggle="collapse" data-bs-target="#newEmail" aria-expanded="false" aria-controls="newEmail">Zmień adres e-mail</button>
                    <div class="collapse" id="newEmail">                        
                        <form action="./components/changeEmail" method="POST">
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="login">Nowy adres e-mail: </span>
                                <input type="text" class="form-control" name="newEmail" placeholder="" aria-label="newEmail" aria-describedby="newEmail" required>
                                <button class="btn btn-success" type="submit">Zmień</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body mt-3">
                 <h2 class="part">Zarządzanie ofertami dań</h2>
                 <div class="text-center mt-4">
                    <a href="./dishesEdit.php"  class="adminPanels"><button class="btn btn-success" type="button">Panel dań</button></a>
                 </div>
            </div>
            <div class="card-body mt-1">
                 <h2 class="part">Zarządzanie użytkownikami</h2>
                 <div class="text-center mt-4">
                    <a href="./userEdit.php"  class="adminPanels"><button class="btn btn-success" type="button">Panel użytkowników</button></a>
                 </div>
            </div>
           
                       
            </div>
        </div>         
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>