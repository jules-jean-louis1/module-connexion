<?php
include 'connect.php';
$message = "";

if (isset($_POST['envoyer'])) {
        $login10 = $_POST['login'];
        // requte pour connaître si l'utilisateur est deja dans la base de données
        $user_exist ="SELECT * FROM connexion WHERE login = '$login10'";
        $rs = mysqli_query($mysqli,$user_exist);
        //requete pour la creation d'utilisateur
        $nom = $_POST['lname'];
        $prenom = $_POST['fname'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "INSERT INTO connexion (login, nom, prenom, password) VALUES ('$login','$prenom','$nom','$password')";
    if (empty($_POST['login'])) {
        $message = "Champs login vide";
    }
    if (empty($_POST['lname'])) {
        $message = "Champs nom vide";
    }
    if (empty($_POST['fname'])) {
        $message = "Champs prénom vide";
    }
    if (empty($_POST['password'])) {
        $message = "Champs password vide";
    } elseif (mysqli_num_rows($rs) > 0) { //mysqli_num_rows compte le nombre d'occurence de la requete si superieur a 0 user existe
            $message = "Ce nom d'utilisateur existe déjà.";
        }
        else {
            mysqli_query($mysqli, $sql);
            $message = "Votre compte a était crée";
            header('Location: connexion.php');
        }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_inscription.css">
    <title>inscription</title>
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
        <main class="position-relative">
            <section class="s1_connect">
                <div class="module_connect">
                    <div class="module_warpper">
                        <div class="module_container">  <!-- Zone de connection -->
                            <form action="" method="post" class="form_">
                                <div class="text_form">
                                    <h2>Inscrivez-vous</h2>
                                </div>
                                <input type="text" name="login" id="log" placeholder="Nom d'utilisateur">
                                <input type="password" name="password" id="log" placeholder="Mot de passe">
                                <input type="text" name="fname" id="log" placeholder="Prénom">
                                <input type="text" name="lname" id="log" placeholder="Nom">
                                <input type="submit" value="S'inscrire" id="submit" name="envoyer">
                                <?php echo $message; ?>
                                <p id="text_membre">Déjà membre ? <a href="connexion.php" id="text_link_form">Se connecter</a></p>
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
                            <li><button class="btn_footer"><a href="connexion.php">Connexion</a></button></li>
                            <li><button class="btn_footer2"><a href="profil.php">Profil</a></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
