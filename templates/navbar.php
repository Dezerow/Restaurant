<?php 
    session_start(); 
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>



<nav class="navbar navbar-expand-md fixed-top">   
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>         
    <ul class="nav" id="nav-scroll">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Strona główna</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mainBar" id="test" href="#mainDish">Dania główne</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mainBar" href="#pasta">Makarony</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mainBar" href="#fish">Ryby</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mainBar" href="#soups">Zupy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mainBar" href="#footer">Kontakt</a>
        </li>
    </ul>

        <div class="d-flex"> 
            <div class="collapse navbar-collapse navbar-nav" id="navbarCollapse" data-bs-theme="dark">
                <?php 
                    if(isset($_SESSION['username'])){
                        echo'
                        <div class="nav-item" id="collapse-firstitem">
                            <a href="#">'.$username.'</a>
                        </div>
                        <div class="nav-item collapse-items" id="registration">
                            <a href="components/logout.php">Wyloguj</a>
                         </div>';                      
                    }else{
                        echo' 
                        <div class="nav-item" id="collapse-firstitem">
                             <a href="login.php">Logowanie</a>
                        </div>
                        <div class="nav-item collapse-items" id="registration">
                            <a href="register.php">Rejestracja</a>
                        </div>';
                    }
                ?>                    
            </div>     
        </div>            
    </div>
</nav>


<script>

    const currentUrl = window.location.href;
    console.log(currentUrl);

    if(currentUrl.includes('login.php') || currentUrl.includes("register.php")){
      window.onload = () => {
        let elements = document.querySelectorAll('.mainBar');
            elements.forEach((element)=>{
                element.className+=" hideMainBar"; 
            });
        }       
     }else{
         document.getElementsByClassName("mainBar").className-=(" hideMainBar")
     }
</script>



