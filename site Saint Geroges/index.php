<!DOCTYPE html> 
<html lang="fr"> 
 <head> 
 <meta charset="utf-8" /> 
 <title>  saint georges </title> 
 
 <link rel="stylesheet" href="style.css" type="text/css" media="screen">
 <script src="site.js"></script>


 </head> 

 <body>

    <?php 
        session_start();
        var_dump($_SESSION);

        

    ?>
    <style>
            .admin {
                diplay:none;
                
            }
            </style>
    <div class="loader">
        <span class="lettre">C</span>
        <span class="lettre">H</span>
        <span class="lettre">A</span>
        <span class="lettre">R</span>
        <span class="lettre">G</span>
        <span class="lettre">E</span>
        <span class="lettre">M</span>
        <span class="lettre">E</span>
        <span class="lettre">N</span>
        <span class="lettre">T</span>
    </div>

    <header >
        
        <div class="bloc-variable"></div>
        <img class="logo" src="img/logo.png">
       
    </header>
    
    
    <div class="cont">
        <ul class="menu-bar">
            <li><a class="blanc" href="index.html">Accueil</a></li>
            <li><a class="blanc" href="login.html">Galerie</a></li>
            <li><a class="blanc" href="login.html">Qui Nous Sommes</a></li>
            <li><a class="blanc" href="login.html">Devis</a></li>
            <li><a class="blanc" href="contact.html">Contact</a></li>
            <li><a class="blanc" href="http://localhost/Saint-Georges-/login.html">Login</a></li>
            <li class="admin"><a>ADMIN</a></li>
           <?php 
           
           if($_SESSION['name'] = "thomas" ){
                echo('aaa');
                ?>
                
                <style>
                .admin {
                    diplay:block; 
                }
                </style>

            

                <?php  
            }  ?>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        
    </div>

    

    
   
 </body>
 
