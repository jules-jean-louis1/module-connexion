<?php
session_start();
/* connetion de la base de donnée phpmyadmin */
$mysqli = new mysqli("localhost","root","","moduleconnexion");

$result = mysqli_query($mysqli,"SELECT * FROM `connexion`");
$row = $result->fetch_all();
$_SESSION['login'] = $row[0][1];
$_SESSION['password'] = $row[0][4];

/* Tester si le login et le password se situe dans la base de donnée */


/* for ($i=0; isset($_POST['envoyer']) ; $i++) { 
    echo $_POST['name'];
    # code...
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

    </header>
    <main>
        <section class="s1_connect">
            <div class="module_connect">
                <div class="module_warpper">
                    <div class="module_container">  <!-- Zone de connection -->
                        <form action="inscription.php" method="post" class="form_">
                            <h2>Se connecter</h2>
                            <p>Vous devez être inscrit dans la base de données pour pouvoir vous authentifier.</p>
                            <input type="text" name="username" id="log" placeholder="Login">
                            <input type="text" name="password" id="log" placeholder="Mot de passe">
                            <a href="">Login / Password oublié</a>
                            <input type="submit" value="Se connecter" id="submit" name="envoyer">
                            <?php
                                if ($_POST["username"] === $_SESSION['login'] || $_POST['password'] === $_SESSION['password'] ) {
                                    echo "Connexion réussie ";
                                    echo "Bonjour " . $_SESSION['login']; 
                                }  
                                     else {
                                        echo "Le mot de passe / login n'est pas valable";
                                    }                                
                            ?>
                        </form>
                        <p>Pas encore membre ? <a href="">S'inscrire</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>