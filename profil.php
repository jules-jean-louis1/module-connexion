<?php
session_start();
$mysqli = new mysqli("localhost","root","","moduleconnexion");
$conn = mysqli_query($mysqli,"SELECT login, password, nom, prenom FROM moduleconnexion.connexion");
$result = $conn->fetch_all();




if (isset($_POST['submit_btn'])) {
    if ($_POST['login'] <> $_SESSION['login']){
        $login = $_POST['login'];
        $select = mysqli_query($mysqli, "SELECT * FROM `connexion` WHERE `login` = '$login'");
        $_SESSION['login'] = $_POST['login'];
    }
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles_profil.css">
    <title>compte</title>
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
                                <li><a href='http://'>Acceuil</a></li>
                                <li><a href='http://'>Profil</a></li>
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
                        <li><button class="btn_inscri"><a href='inscription.php' style="padding-left: 10;">Inscription</a></button></li>
                        <li><button class="btn_co"><a href='connexion.php'>Connexion</a></button></li>
                    </ul>
                </div>
            </div>
        </div>
    <img src="images/header.png" width="1920" height="50" alt=""/> 
	</header>
    <main class="position-relative">
        <section class="s1_connect">
            <div class="module_connect">
                <div class="module_warpper">
                    <div class="module_container">
                        <form action="" method="POST" class="form_">
                            <div class="compte_title">
                                <h2>Paramètres du compte utilisateur</h2>
                                <p>Vous pouvez ici effectuer des changements sur vos information personnels</p>
                            </div>
                            <label for=""><?php echo "Login :".$_SESSION['login'];?></label>
                            <input type="text" name="login" id="log" placeholder="Changer de login">
                            <label for=""><?php echo "Prénom :".$_SESSION['fname'];?></label>
                            <input type="text" name="fname" id="log" placeholder="Changer de Prénom">
                            <label for=""><?php echo "Nom :".$_SESSION['lname'];?></label>
                            <input type="text" name="lname" id="log" placeholder="Changer de Nom">
                            <label for=""><?php echo "Password :".$_SESSION['password'];?></label>
                            <input type="text" name="mdp" id="log" placeholder="Changer de Mot de passe">
                            <input type="submit" value="Effectuer les changements" name="submit_btn"  id="submit" >
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img src="images/footer.png" width="1920" height="50" alt=""/>
        <div class="foot_nav">
            <div class="foot_warpper">
                <div class="foot_container">
                    <ul id="list_foot">
                        <li><button class="btn_footer1"><a href="inscription.php">Inscription</a></button></li>
                        <li><button class="btn_footer"><a href="inscription.php">Connexion</a></button></li>
                        <li><button class="btn_footer2"><a href="inscription.php">Profil</a></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
