<?php
session_start();
include 'connect.php';
?>

<?php if($_SESSION['login'] === 'admin'){ ?>

<?php
$result = mysqli_query($mysqli,"SELECT * FROM connexion");
$row = $result->fetch_all();
$count = mysqli_query($mysqli,"SELECT COUNT(*) FROM `connexion`");
$compte = $count->fetch_all();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin.css">
    <title>Admin</title>
</head>
<body>
    <header>
        <div class="navbar_">
            <div class="navbarsub">
                <div class="navbar_r">
                    <div class="container_nav">
                        <nav id='menu'>
                            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'>
                            <ul>
                                <li><a href='index.php'>Acceuil</a></li>
                                <li><a href="profil.php"><?php echo $_SESSION['login']; ?></a></li>
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
                        <li class="btn_inscri">
                            <form action="index.php" class="form01">
                                <input type="submit" value="Deconnexion" name="logout">
                            </form>
                        </li>
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
                    <div class="module_container">
                        <div class="count_user">
                            <?php
                        
                                echo "Il y a ".$compte[0][0]." comptes utilisateurs enregistr??s";
                            ?>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Login</th>
                                    <th>Pr??nom</th>
                                    <th>Nom</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                                    <?php
                                    for ($i=0; isset($row[$i]) ; $i++) 
                                    {
                                    echo "<tr>";
                                        for ($j=1; isset($row[$i][$j]) ; $j++)
                                        {
                                            echo "<td>" . $row[$i][$j] . "</td>";
                                        }
                                    echo "</tr>";
                                    }
                                    ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img id="foot_img" src="images/footer.png" width="1920" height="50" alt=""/>
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

<?php } else{header('location: index.php');} ?>