<?php
session_start();
$mysqli = new mysqli("localhost","root","","moduleconnexion");
$conn = mysqli_query($mysqli,"SELECT login, password, nom, prenom FROM moduleconnexion.connexion");
$result = $conn->fetch_all();


/* for ($i=0; isset($result[$i]) ; $i++) { 
    
} */

$id = $_SESSION['id'];

if (isset($_POST['envoyer'])) {
    if (isset($_POST['change_fname'])) 
    {
        $prenom = $_POST['change_fname'];
        $update_prenon = mysqli_query($mysqli,"UPDATE `connexion` SET `prenom` = '$prenom' WHERE `id` = '$id'");
        $_SESSION['fname'] = $prenom;
        $_SESSION['info_update'] ='Votre prénom a bien été modifier';
        header('location: compte.php');
    }
    if (isset($_POST['change_mdp'])) 
    {
        $password = $_POST['change_mdp'];
        $update_password = mysqli_query($mysqli,"UPDATE `connexion` SET `password` = '$password' WHERE `id` = '$id'");
        $_SESSION['password'] = $password;
        $_SESSION['info_update'] ='Votre prénom a bien été modifier';
        header('location: compte.php');
    }
    if(isset($_POST['change_lname']))
    {
        $nom = $_POST['change_lname'];
        $up_prenom = mysqli_query($mysqli,"UPDATE `connexion` SET `nom`= '$nom' WHERE `id`='$id'");
        $_SESSION['lname'] = $nom;
        $_SESSION['info_update'] ='Votre nom a bien été modifier';
        header('location: compte.php');
    }
        //** UPDATE LOGIN */
    if(isset($_POST['change_login']))
    {
        $login = $_POST['change_login'];
    
        $select = mysqli_query($mysqli, "SELECT * FROM `connexion` WHERE `login` = '$id'");
        $result_login = mysqli_fetch_all($select);
        if (count($result_login)!==0){
            echo 'le nom d\'utilisateur existe déjà';
        } else {
            $up_prenom = mysqli_query($mysqli,"UPDATE `utilisateurs` SET `login`= '$login' WHERE `id`='$id'");
            $_SESSION['login']=$login;
            $_SESSION['info_update'] = 'Votre login a bien été modifier';
        }
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles_compte2.css">
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
    <main>
        <section class="s1_connect">
            <div class="module_connect">
                <div class="module_warpper">
                    <div class="module_container">
                        <form action="" method="post">
                            <div class="compte_title">
                                <h2>Paramètres du compte utilisateur</h2>
                                <p>Vous pouvez ici effectuer des changements sur vos information personnels</p>
                            </div>
                            <label for=""><?php echo "Login :".$_SESSION['login'];?></label>
                            <input type="text" name="change_login" id="log" placeholder="Changer de login">
                            <label for=""><?php echo "Prénom :".$_SESSION['fname'];?></label>
                            <input type="text" name="change_fname" id="log" placeholder="Changer de Prénom">
                            <label for=""><?php echo "Nom :".$_SESSION['lname'];?></label>
                            <input type="text" name="change_lname" id="log" placeholder="Changer de Nom">
                            <label for=""><?php echo "Password :".$_SESSION['password'];?></label>
                            <input type="text" name="change_mdp" id="log" placeholder="Changer de Mot de passe">
                            <input type="submit" value="Effectuer les changements" name="submit_btn"  id="submit" >
                            <?php
                                
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
<!-- UPDATE `connexion` SET `login` = 'jules', `prenom` = 'jules', `nom` = 'jean', `password` = 'jules' WHERE `connexion`.`id` = 2;  --> 
