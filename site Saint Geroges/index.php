<!DOCTYPE html> 
<html lang="fr"> 
 <head> 
 <meta charset="utf-8" /> 
 <title>  Saint Georges </title> 
 
 <link rel="stylesheet" href="style.css" type="text/css" media="screen">
 <script src="site.js"></script>


 </head> 

 <body>

    <?php 
        session_start();
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
            <li><a class="blanc" href="#galerie">Galerie</a></li>
            <li><a class="blanc" href="#devis">Devis</a></li>
            <li><a class="blanc" href="#contact">Contact</a></li>
            <li><a class="blanc" href="login.html">Login</a></li>
            <?php if ( isset ($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) : ?> 
                
                <li class="admin"><a>ADMIN</a></li>

                <?php endif; ?>
           
            <li><a class="blanc" href="logout.php">Logout</a></li>
        </ul>
        
    </div>
    <div class="acceuil">
       <h1>Bienvenue sur le site de Saint Georges, votre groupe de peintres et de rénovation intérieure de confiance !</h1>
       <h2>Voici nos présentation</h2>
        <ol>
            <li >
                <div class="icon"><i class="fa-solid fa-bicycle"></i></div>
                <div class="title">Step 1</div>
                <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
            </li>
            <li >
                <div class="icon"><i class="fa-solid fa-car"></i></div>
                <div class="title">Step 2</div>
                <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
            </li>
            <li >
                <div class="icon"><i class="fa-solid fa-helicopter"></i></div>
                <div class="title">Step 3</div>
                <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
            </li>
            <li >
                <div class="icon"><i class="fa-solid fa-plane"></i></div>
                <div class="title">Step 4</div>
                <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
            </li>
            <li >
                <div class="icon"><i class="fa-solid fa-rocket"></i></div>
                <div class="title">Step 5</div>
                <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
            </li>
            <li >
                <div class="icon"><i class="fa-solid fa-bus"></i></div>
                <div class="title">Step 6</div>
                <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
            </li>
        </ol>
    </div>

    <div class="galerie" id="galerie">
        

    </div>

    

    
   
 </body>
 
