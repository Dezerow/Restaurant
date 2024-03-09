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
    <link rel="stylesheet" href="./css/dishEdit.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Panel administratora - lista dań</title>
</head>
<body>

<?php

include "./components/db_conn.php";

?>
    <div class="container-fluid px-0">
       <?php 
            include "./templates/navbar.php";
            $adminname = $_SESSION['adminname'];

        ?>
        <div class="row mt-5 chooseOption">
            <div class="col-lg-12">
                <a href="./addDish.php"><button class="btn btn-info optionsToEdit" id="">Dodaj danie</button></a>
            </div>
            <div class="col-lg-12 mt-3">
                <button class="btn btn-success optionsToEdit" id="mainDishVisibility">Dania główne</button>
                <button class="btn btn-success optionsToEdit" id="pastaVisibility">Makarony</button>                
                <button class="btn btn-success optionsToEdit" id="fishVisibility">Ryby</button>
                <button class="btn btn-success optionsToEdit" id="soupVisibility">Zupy</button>
                <button class="btn btn-success optionsToEdit" id="allVisibility">Pokaż/Ukryj wszystkie panele</button>
            </div>             
            <div class="col-lg-12 mt-3">
                <p id="result"><?php if(isset($_GET['result'])){
                    echo $_GET['result'];
                }?></p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="card dishEdit" id="hideMainDish" >        
                <table class="table">
                    <thead>
                        <tr>                        
                            <th scope="col-1">Id</th>
                            <th scope="col-2">Nazwa dania</th>
                            <th scope="col-3">Opis dania</th>
                            <th scope="col-3">Cena</th>
                            <th scope="col-3">Edycja</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include "components/db_conn.php";
                            $sql = "SELECT * FROM main_dish";
                            $result = $conn->query($sql);
                            if (mysqli_num_rows($result) > 0){
                                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                    $row = $result->fetch_assoc();
                                    echo '<tr>
                                    <th scope="row">'.$row["Id"].'</th>
                                    <td>'.$row['Name'].'</td>
                                    <td>'.$row['Description'].'</td>
                                    <td>'.$row['Price'].'</td>
                                    <td>
                                        <a href="dishEdit.php?id='.$row['Id'].'&type=main_dish"><button class="btn btn-warning">Edytuj</button></a>';
                                        echo '<form action="./components/deleteDish.php" method="POST" onsubmit="return confirm(`Czy jesteś pewien, że chcesz usunąć danie z oferty?`);">
                                        <input type="hidden" name="id" value='.$row['Id'].'/>
                                        <input type="hidden" name="type" value="main_dish"/>
                                        <input type="submit" class="btn btn-danger" value="Usuń">
                                    </form>';                                                            
                                echo '</td>
                                </tr>';
                                }
                            }                        
                        ?>       
                    </tbody>
                </table>           
            </div>         
            <div class="card dishEdit" id="hidePasta">        
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col-1">Id</th>
                        <th scope="col-2">Nazwa makaronu</th>
                        <th scope="col-3">Opis makaronu</th>
                        <th scope="col-3">Cena</th>
                        <th scope="col-3">Edycja</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include "components/db_conn.php";
                            $sql = "SELECT * FROM pasta";
                            $result = $conn->query($sql);
                            if (mysqli_num_rows($result) > 0){
                                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                    $row = $result->fetch_assoc();
                                    echo '<tr>
                                    <th scope="row">'.$row["Id"].'</th>
                                    <td>'.$row['Name'].'</td>
                                    <td>'.$row['Description'].'</td>
                                    <td>'.$row['Price'].'</td>
                                    <td>
                                        <a href="dishEdit.php?id='.$row['Id'].'&type=pasta"><button class="btn btn-warning">Edytuj</button></a>';
                                        echo '<form action="./components/deleteDish.php" method="POST" onsubmit="return confirm(`Czy jesteś pewien, że chcesz usunąć danie z oferty?`);">
                                        <input type="hidden" name="id" value='.$row['Id'].'/>
                                        <input type="hidden" name="type" value="pasta"/>
                                        <input type="submit" class="btn btn-danger" value="Usuń">
                                    </form>';                                                            
                                echo '</td>
                                </tr>';
                                }
                            }                        
                        ?>                  
                    </tbody>
                </table>           
            </div>     
            <div class="card dishEdit" id="hideFish">        
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nazwa ryby</th>
                        <th scope="col">Opis ryby</th>
                        <th scope="col">Cena</th>
                        <th scope="col-3">Edycja</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include "components/db_conn.php";
                            $sql = "SELECT * FROM fish";
                            $result = $conn->query($sql);
                            if (mysqli_num_rows($result) > 0){
                                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                    $row = $result->fetch_assoc();
                                    echo '<tr>
                                    <th scope="row">'.$row["Id"].'</th>
                                    <td>'.$row['Name'].'</td>
                                    <td>'.$row['Description'].'</td>
                                    <td>'.$row['Price'].'</td>
                                    <td>
                                        <a href="dishEdit.php?id='.$row['Id'].'&type=fish"><button class="btn btn-warning">Edytuj</button></a>';
                                        echo '<form action="./components/deleteDish.php" method="POST" onsubmit="return confirm(`Czy jesteś pewien, że chcesz usunąć danie z oferty?`);">
                                        <input type="hidden" name="id" value='.$row['Id'].'/>
                                        <input type="hidden" name="type" value="fish"/>
                                        <input type="submit" class="btn btn-danger" value="Usuń">
                                    </form>';                                                            
                                echo '</td>
                                </tr>';
                                }
                            }                        
                        ?>                     
                    </tbody>
                </table>           
            </div>      
            <div class="card dishEdit" id="hideSoup">        
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nazwa zupy</th>
                        <th scope="col">Cena</th>
                        <th scope="col-3">Edycja</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include "components/db_conn.php";
                            $sql = "SELECT * FROM soups";
                            $result = $conn->query($sql);
                            if (mysqli_num_rows($result) > 0){
                                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                    $row = $result->fetch_assoc();
                                    echo '<tr>
                                    <th scope="row">'.$row["Id"].'</th>
                                    <td>'.$row['Name'].'</td>
                                    <td>'.$row['Price'].'</td>
                                    <td>
                                        <a href="dishEdit.php?id='.$row['Id'].'&type=soups"><button class="btn btn-warning">Edytuj</button></a>';
                                        echo '<form action="./components/deleteDish.php" method="POST" onsubmit="return confirm(`Czy jesteś pewien, że chcesz usunąć danie z oferty?`);">
                                            <input type="hidden" name="id" value='.$row['Id'].'/>
                                            <input type="hidden" name="type" value="soups"/>
                                            <input type="submit" class="btn btn-danger" value="Usuń">
                                        </form>';                                                            
                                    echo '</td>
                                    </tr>';
                                    
                                }
                            }                                                                                     
                        ?>                                              
                    </tbody>
                </table>           
            </div>                    
        </div>                        
    </div>          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/showDishEditOptions.js"></script>
</body>
</html>