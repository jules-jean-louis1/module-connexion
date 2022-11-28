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
    <title>co.com</title>
</head>
<body>
        <section class="s1_connect">
            <div class="module_connect">
                <div class="module_warpper">
                    <div class="module_container">  <!-- Zone de connection -->
                        <form action="" method="post" class="form_">
                            <h2>S'inscrire</h2>
                            <input type="text" name="fname" id="fname" placeholder="Prénom">
                            <input type="text" name="lname" id="lname" placeholder="Nom">
                            <input type="text" name="username" id="log" placeholder="Nom d'utilisateur">
                            <input type="text" name="password" id="log" placeholder="Mot de passe">
                            <input type="submit" value="S'inscrire" id="submit" name="envoyer">
                            <?php
                               $sql = "INSERT INTO connexion (login, nom, prenom, password) VALUES ('$login','$prenom','$nom','$password')";
                               if (mysqli_query($conn, $sql)) {
                                   echo "New record created successfully";
                               } else {
                                   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                               }
                               mysqli_close($conn);                         
                            ?>
                        </form>
                        <p>Déjà membre ? <a href="">Se connecter</a></p>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
