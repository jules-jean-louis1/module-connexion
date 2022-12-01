<?php

$mysqli = new mysqli("localhost","root","","moduleconnexion");
$id = mysqli_query($mysqli,"SELECT login, password, nom, prenom, id FROM `connexion");
$row = $id->fetch_all();
var_dump($row);


?>



<!-- if (isset($_POST['envoyer'])) {
    if ($_POST['change_fname'] <> $_SESSION['fname']) 
    {
        $prenom = $_POST['change_fname'];
        $update_prenon = mysqli_query($mysqli,"UPDATE `connexion` SET `prenom` = '$prenom' WHERE `id` = '$id'");
        $_SESSION['fname'] = $prenom;
        $_SESSION['info_update'] ='Votre prénom a bien été modifier';
        header('location: compte.php');
    }
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
} -->