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
    <title>Panel dodawania dania</title>
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
                <h2 class="card-title text-center" >Panel dodawania dania</h2>               
            </div>
            <div class="card-body">
                <form action="./components/addDishServer.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="dishName">Nazwa dania: </span>
                        <input type="text" class="form-control" name="dishName" placeholder="Kotlet schabowy..." aria-label="dishName" aria-describedby="dishName" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="dishDesc">Opis potrawy: </span>
                        <input type="text" class="form-control" name="dishDesc" placeholder="Pieczone ziemniaki z (...)" aria-label="dishDesc" aria-describedby="dishDesc" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="dishPrice">Cena: (zł) </span>
                        <input type="number" min="1" max="250" step="0.01" class="form-control" placeholder="w złotówkach" name="dishPrice" aria-label="price" aria-describedby="price" required>
                    </div>        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="dishPrice">Typ dania: </span>
                        <select name="dishType" class="form-select" aria-label="dishType">
                            <option selected value="main_dish">Danie główne</option>
                            <option value="pasta">Makarony</option>
                            <option value="fish">Ryby</option>
                            <option value="soups">Zupy</option>
                        </select>
                    </div>  
                    <div class="text-center">
                      <button type="submit" class="btn btn-success">Dodaj danie</button>    
                      <button type="button" class="btn btn-warning" onclick="javascript:history.back()">Wróć</button>          
                    </div>         
               </form> 
            </div>
        </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>