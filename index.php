<!--  Page d'acceuil -->


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_index.css">
    <title>presentation - acceuil</title>
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
                                <li><a href='http://'>Home</a></li>
                                <li><a href='http://'>About</a></li>
                                <li><a class='dropdown-arrow' href='http://'>Compte</a>
                                <ul class='sub-menus'>
                                    <li><a href='http://'>Paramètres</a></li>
                                    <li><a href='http://'>Inscription</a></li>
                                    <li><a href='http://'>Connexion</a></li>
                                </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="logo_l">
                    <div class="container_logo" style="padding-right: 50px;">
                        <img src="images/logo.svg" alt="">
                    </div>
                </div>
                <div id="menu" class="color_btn">
                    <ul>
                        <li><button class="btn_inscri"><a href='http://localhost/connect/inscription.php'>Inscription</a></button></li>
                        <li><button class="btn_co"><a href='http://localhost/connect/connexion.php'>Connexion</a></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="js-warp-hide bg-gray-dark-mktg d-flex flex-auto flex-column overflow-hidden position-relative">
        <section class="main-container_s1">
            <div class="snow">
            </div>
            <div class="title_main">
                <h2>Module de Connexion</h2>
            </div>
            <!-- <img src="images/hero-glow.svg" alt="Glowing" class="js-warp-hide position-absolute overflow-hidden home-hero-glow events-none"> -->
        </section>
    </main>
    <footer>
            <div class="list_foot">
                <div class="foot_warpper">
                    <div class="list_f">
                        <ul>
                            <li><a class="foot_a" href="index.php">Acceuil</a></li>
                            <li><a class="foot_a" href="inscription.php">S'inscrire</a></li>
                            <li><a class="foot_a" href="connexion.php">Se connecter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
</body>
</html>