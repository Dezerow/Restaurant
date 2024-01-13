<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css" >
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Strona główna</title>
</head>
<body>

<?php

include "./components/db_conn.php";

?>
    <div class="container-fluid px-0">
        <?php 
            include "./templates/navbar.php";
        ?>
        <section name="restaurantName" id="restaurantName">
         <h1>Oferujemy niskie ceny oraz wysoką jakość!</h1>
        </section>
        <section name="mainDish" id="mainDish">
            <div class="row h-100">
                <div class="col-lg-5 col-md-12" id="mainDishLeft">
                </div>
                <div class="col-lg-7 col-md-12 mt-1" id="mainDishRight">
                    <h3 class="mb-4 mt-2">Dania główne</h3>

                    <?php
                        $sql = "SELECT Name, Description, Price from main_dish";
                        $result = $conn->query($sql);
                        echo '<div class="row">';
                        if (mysqli_num_rows($result) > 0) {
                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                $row = $result->fetch_assoc();
                                if(mysqli_num_rows($result)<5){
                                    echo '                                
                                    <div class="col-lg-12 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                               
                                }else{
                                    echo '                                
                                    <div class="col-lg-6 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                                }
                            }
                            echo '</div>';
                        }
                    
                    ?>                                                          
                </div>    
            </div>
        </section>

        <section name="pasta" id="pasta">
        <div class="row h-100">
                <div class="col-lg-5 col-md-12 mt-1" id="pastaLeft">
                    <h3 class="mb-4 mt-2">Makarony</h3>
                    <?php
                        $sql = "SELECT Name, Description, Price from pasta";
                        $result = $conn->query($sql);
                        echo '<div class="row">';
                        if (mysqli_num_rows($result) > 0) {
                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                $row = $result->fetch_assoc();
                                if(mysqli_num_rows($result)<5){
                                    echo '                                
                                    <div class="col-lg-12 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                               
                                }else{
                                    echo '                                
                                    <div class="col-lg-6 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                                }
                            }
                            echo '</div>';
                        }
                    
                    ?>                                            
                </div>
                <div class="col-lg-7 col-md-12" id="pastaRight">                    
                </div>    
            </div>
        </section>

        <section name="fish" id="fish">
            <div class="row h-100">
                <div class="col-lg-5 col-md-12" id="fishLeft">
                </div>
                <div class="col-lg-7 col-md-12 mt-1" id="fishRight">
                    <h3 class="mb-4 mt-2">Ryby</h3>
                    <?php
                        $sql = "SELECT Name, Description, Price from fish";
                        $result = $conn->query($sql);
                        echo '<div class="row">';
                        if (mysqli_num_rows($result) > 0) {
                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                $row = $result->fetch_assoc();
                                if(mysqli_num_rows($result)<5){
                                    echo '                                
                                    <div class="col-lg-12 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                               
                                }else{
                                    echo '                                
                                    <div class="col-lg-6 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                                }
                            }
                            echo '</div>';
                        }
                    
                    ?>                                                              
                </div>    
            </div>
        </section>

        <section name="soups" id="soups">
            <div class="row h-100">
            <div class="col-lg-5 col-md-12 mt-1" id="soupsLeft">
                    <h3 class="mb-4 mt-2">Zupy</h3>
                    <?php
                        $sql = "SELECT Name, Description, Price from soups";
                        $result = $conn->query($sql);
                        echo '<div class="row">';
                        if (mysqli_num_rows($result) > 0) {
                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                $row = $result->fetch_assoc();
                                if(mysqli_num_rows($result)<5){
                                    echo '                                
                                    <div class="col-lg-12 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                               
                                }else{
                                    echo '                                
                                    <div class="col-lg-6 col-md-12">
                                        <h5>'.$row['Name'].'</h5>
                                        <p>'.$row['Description'].'</p>
                                        <p>'.$row['Price'].' zł</p>
                                    </div>';
                                }
                            }
                            echo '</div>';
                        }
                    
                    ?>                                                                  
                </div>
                <div class="col-lg-7 col-md-12" id="soupsRight">                    
                </div>    
            </div>
        </section>
        <section name="footer" id="footer">
            <?php
                include "./templates/footer.php";
            ?>
        </section>             
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>