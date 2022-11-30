<?php
session_start();
/* connetion de la base de donnée phpmyadmin */
$mysqli = new mysqli("localhost","root","","moduleconnexion");

/* $result = mysqli_query($mysqli,"SELECT login password FROM moduleconnexion.connexion");
$row = $result->fetch_all(); */

/* Tester si le login et le password se situe dans la base de donnée */


/* for ($i=0; isset($_POST['envoyer']) ; $i++) { 
    echo $_POST['name'];
    # code...
} */

/* if (isset($_POST['envoyer'])) {
    if (empty($_POST['login'])) {
        echo "Le champs login n'est pas renseigner.";
    }   else {
        if (empty($_POST['password'])) {
            echo "Le champs password n'est pas renseigner";
        }   else {
        }
    }
} */

?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_connexion.css">
    <title>co.com - Connexion</title>
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
                                <li><a href='acceuil.php'>Home</a></li>
                                <li><a href='http://'>About</a></li>
                                <li><a class='dropdown-arrow' href='compte.php'>Compte</a>
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
    <main>
        <section class="s1_connect">
            <div class="module_connect">
                <div class="module_warpper">
                    <div class="module_container">  <!-- Zone de connection -->
                        <form action="" method="post" class="form_">
                            <h2>Se connecter</h2>
                            <p>Vous devez être inscrit dans la base de données pour pouvoir vous authentifier.</p>
                            <input type="text" name="username" id="log" placeholder="Login">
                            <input type="password" name="password" id="log" placeholder="Mot de passe">
                            <a href="">Login / Password oublié</a>
                            <input type="submit" value="Se connecter" id="submit" name="envoyer">
                        </form>
                        <?php
                            $conn = mysqli_query($mysqli,"SELECT login, password, nom, prenom, id FROM moduleconnexion.connexion");
                            $result = $conn->fetch_all();

                            if (isset($_POST['envoyer'])) {
                                for ($i=0; isset($result[$i]) ; $i++) { 
                                    if ($_POST['username'] === $result[$i][0] AND $_POST['password'] === $result[$i][1]){
                                        $_SESSION['id'] = $result[$i][0];
                                        $_SESSION['login'] = $_POST['username'];
                                        $_SESSION['password'] = $_POST['password'];
                                        $_SESSION['lname'] = $result[$i][2];
                                        $_SESSION['fname'] = $result[$i][3];
                                        echo 'Welcome ' . $_SESSION['login'] . '!';    
                                        header('Location: compte.php'); 
                                    } else {
                                       
                                    }
                                } 
                            } else {
                                echo "Mdp ou login invalide";
                            }
                            
                            if (isset($_POST['envoyer'])) {
                                if ($_POST['username'] === $result[0][0] AND $_POST['password'] === $result[0][0]) {
                                    header('Location: http://localhost/connect/admin.php');
                                }
                            }
                        ?>
                        <p>Pas encore membre ? <a href="">S'inscrire</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>