<?php
$mysqli = new mysqli("localhost","root","","moduleconnexion");


$result = mysqli_query($mysqli,"SELECT * FROM connexion");
$row = $result->fetch_all();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_admin.css">
    <title>Admin</title>
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
        <section class="s1_cont">
            <div class="s1_warpper">
                <div class="s1_container">
                    <div class="count_user">
                        <?php
                            $count = mysqli_query($mysqli,"SELECT COUNT(*) FROM `connexion`");
                            $compte = $count->fetch_all();
                            echo "Il y a ".$compte[0][0]." comptes utilisateurs enregistrés";
                        ?>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Login</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                                <?php
                                for ($i=0; isset($row[$i]) ; $i++) {
                                echo "<tr>";
                                for ($j=1; isset($row[$i][$j]) ; $j++)
                                {
                                    echo "<td>" . $row[$i][$j] . "</td>";	# code...
                                }
                                echo "</tr>";
                            }
                                ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
