<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "moduleconnexion";

$conn = mysqli_connect($servername,$username,$password,$database);

/* $result = mysqli_query($mysqli,"SELECT * FROM `connexion`");
$row = $result->fetch_all(); */
/* INSERT INTO connexion (login,prenom,nom,password) VALUES ($login,$prenom,$nom,$password)
 */

if ($_POST['fname']) {
    $prenom = $_POST['fname'];
} else {
    echo "Prenom non reçu";
}
if ($_POST['lname']) {
    $nom = $_POST['lname'];
} else {
    echo "Nom non reçu";
}
if ($_POST["username"]) {
    $login = $_POST["username"];
} else {
    echo "Login non reçu";
}
if ($_POST['password']) {
    $password = $_POST['password'];
} else {
    echo "MdP non reçu";
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_inscritpion.css">
    <title>co.com</title>
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
                    <div class="container_logo">
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
                                <div class="text_form">
                                    <h2>Bienvenue sur Connect.co</h2>
                                    <h2>Inscrivez-vous</h2>
                                </div>
                                <input type="text" name="fname" id="log" placeholder="Prénom">
                                <input type="text" name="lname" id="log" placeholder="Nom">
                                <input type="text" name="username" id="log" placeholder="Nom d'utilisateur">
                                <input type="text" name="password" id="log" placeholder="Mot de passe">
                                <input type="submit" value="S'inscrire" id="submit" name="envoyer">
                                <?php
                                   $sql = "INSERT INTO connexion (login, nom, prenom, password) VALUES ('$login','$prenom','$nom','$password')";
                                   if (mysqli_query($conn, $sql)) {
                                       echo "Votre compte a était crée";
                                       #header locztion vers page
                                   } else {
                                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                   }
                                   mysqli_close($conn);
                                ?>
                            </form>
                            <p id="text_membre">Déjà membre ? <a href="">Se connecter</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
</body>
</html>
