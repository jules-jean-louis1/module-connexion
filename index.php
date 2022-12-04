<?php
session_start();

?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <title>Acceuil</title>
</head>
<body>
    <header>
        <div class="navbar_">
            <div class="navbarsub">
                <div class="navbar_r">
                    <div class="container_nav">
                        <nav id='menu'>
                            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
                            <ul>
                                <li><a href='index.php'>Acceuil</a></li>
                                <li><a href='profil.php'>Profil</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="logo_l">
                    <div class="container_logo">
                    	<img src="images/logo.png" alt=""/> 
					</div>
                </div>
                <div id="menu" class="color_btn">
                    <ul>
                    <li><button class="btn_inscri"><a href='connexion.php'>Inscription</a></button></li>
                        <li><button class="btn_co"><a href='connexion.php'>Connexion</a></button></li>
                    </ul>
                </div>
            </div>
        </div>
    <img src="images/header.png" width="1920" height="50" alt=""/> 
	</header>
    <main class="js-warp-hide bg-gray-dark-mktg d-flex flex-auto flex-column overflow-hidden position-relative">
        <section class="main-container_s1">
            <div class="title_main">
				<img src="images/button-submit-home.svg" alt=""/>
				<h2>Module de Connexion</h2>
                <? include 'deconnexion.php';?>
            </div>
            <!-- <img src="images/hero-glow.svg" alt="Glowing" class="js-warp-hide position-absolute overflow-hidden home-hero-glow events-none"> -->
        </section>
    </main>
    <footer>
        <img src="images/footer.png" width="1920" height="50" alt=""/>
        <div class="foot_nav">
            <div class="foot_warpper">
                <div class="foot_container">
                    <ul id="list_foot">
                        <li><button class="btn_footer1"><a href="inscription.php">Inscription</a></button></li>
                        <li><button class="btn_footer"><a href="connexion.php">Connexion</a></button></li>
                        <li><button class="btn_footer2"><a href="profil.php">Profil</a></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>