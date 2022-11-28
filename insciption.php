<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "moduleconnexion";

$conn = mysqli_connect($servername,$username,$password,$database);

/* $result = mysqli_query($mysqli,"SELECT * FROM `connexion`");
$row = $result->fetch_all(); */


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>co.com</title>
</head>
<body>
        <section class="s1_connect">
            <div class="module_connect">
                <div class="module_warpper">
                    <div class="module_container">  <!-- Zone de connection -->
                        <form action="inscription.php" method="post" class="form_">
                            <h2>S'inscrire</h2>
                            <input type="text" name="fname" id="fname" placeholder="Prénom">
                            <input type="text" name="lname" id="lname" placeholder="Nom">
                            <input type="text" name="username" id="log" placeholder="Login">
                            <input type="text" name="password" id="log" placeholder="Mot de passe">
                            <input type="submit" value="S'inscrire" id="submit" name="envoyer">
                            <?php
                                                        
                            ?>
                        </form>
                        <p>Déjà membre ? <a href="">Se connecter</a></p>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
