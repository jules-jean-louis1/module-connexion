<?php
session_start();
/* connetion de la base de donnée phpmyadmin */
$mysqli = new mysqli("localhost","root","","moduleconnexion");


$conn = mysqli_query($mysqli,"SELECT login, password, nom, prenom, id FROM moduleconnexion.connexion");
$result = $conn->fetch_all();
$message = '';

if (isset($_POST['envoyer'])) {
    if (!empty(isset($_POST['username'])) && !empty(isset($_POST['password']))) {
        $message = 'Champs vide';
        
    }
    for ($i=0; isset($result[$i]) ; $i++) { 
        if ($_POST['username'] === $result[$i][0] AND $_POST['password'] === $result[$i][1]){
            $_SESSION['id'] = $result[$i][4];
            $_SESSION['login'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['lname'] = $result[$i][2];
            $_SESSION['fname'] = $result[$i][3];   
            header('Location: profil.php'); 
        } else {
           $message = "Mdp ou login invalide";
        }
    } 
} else {

}

if (isset($_POST['envoyer'])) {
    if ($_POST['username'] === $result[0][0] AND $_POST['password'] === $result[0][1]) {
        header('Location: http://localhost/connect/admin.php');
    }
}
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
                    <div class="module_container">  <!-- Zone de connection -->
                        <form action="" method="post" class="form_">
                            <h2>Se connecter</h2>
                            <p>Vous devez être inscrit dans la base de données pour pouvoir vous authentifier.</p>
                            <input type="text" name="username" id="log" placeholder="Login">
                            <input type="password" name="password" id="log" placeholder="Mot de passe">
                            <input type="submit" value="Se connecter" id="submit" name="envoyer">
                            <? echo $message;?>
                            <p>Pas encore membre ? <a href="" class="linkconnect">S'inscrire</a></p>
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


