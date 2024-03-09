<?php

use function PHPSTORM_META\type;

    session_start(); 
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
    <title>Panel administratora - edycja dania</title>
</head>
<body>

<?php

include "./components/db_conn.php";

?>
    <div class="container-fluid px-0 d-flex justify-content-center">
       <?php 
            include "./templates/navbar.php";
           
            if(isset($_GET['id']) && isset($_GET['type'])){
                $id = $_GET['id'];
                $type = $_GET['type'];                
                $sql = "SELECT * FROM $type WHERE Id='$id'";
                
                $result = $conn->query($sql);
                $row = mysqli_fetch_array($result);
            }
           
           
           
            
        ?>
        <div class="card dishEdit">
            <form action="./components/dishEditBackend.php?id=<?php $idSend?>&type=<?php $typeSend?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
                <input type="hidden" name="type" value="<?php echo $_GET['type'] ?>"/>
                
                <h1 class="mt-3">Edycja potrawy</h1>
                <div class="form-group mt-4">
                    <label for="dishName">Nazwa dania</label>
                    <input type="text" name="dishName" class="form-control" id="dishName"  placeholder="<?php echo $row['Name']?>">            
                </div>
                <?php 
                if($type!=="soups"){
                    echo '
                <div class="form-group mt-4">
                    <label for="dishDesc">Opis dania</label>
                    <input type="text" name="dishDesc" class="form-control" id="dishDesc" placeholder='.$row["Description"].'">            
                </div>';
                }
                ?>
                <div class="form-group mt-4">
                    <label for="dishPrice">Cena</label>
                    <input type="number" min="1" max="250" step="0.01" name="dishPrice" class="form-control" id="dishPrice" placeholder="<?php echo $row['Price'] . 'zł'?>">            
                </div>
                <div class="mt-5 mb-3">
                    <button class="btn btn-success" type="submit">Edytuj</button>
            </form>
                    <button type="button" class="btn btn-danger" onclick="javascript:history.back()">Anuluj edycje</button>
                </div>
                
            
        </div>         
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>