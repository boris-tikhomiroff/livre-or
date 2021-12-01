<!-- <?php
if(isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
}
?> -->
<header class="menu">
        <nav class="menuNav">
            <ul>
                <li class="menuNav_item">
                    <a href="./index.php" class="menuNav_button menuNav_link menuNav_link-crossed">
                        <span>Accueil</span>
                    </a>
                </li>
                <li class="menuNav_item">
                    <a href="./livre-or.php" class="menuNav_button menuNav_link menuNav_link-crossed">
                        <span>Livre d'or</span>
                    </a>
                </li>
                <!-- <li><a href="./livre-or.php" class="menuNav_button">Livre d'or</a></li> -->
                
                <?php if(isset($_SESSION['user'])){?>
                    <li class="menuNav_item">
                        <a href="./commentaire.php" class="menuNav_button menuNav_link menuNav_link-crossed">
                            <span>Commentaire</span>
                        </a>
                    </li>
                    <!-- <li><a href="./commentaire.php" class="menuNav_button">Commentaire</a></li> -->
                    <li class="menuNav_item">
                        <a href="./profil.php" class="menuNav_button menuNav_link menuNav_link-crossed">
                            <span>Profil</span>
                        </a>
                    </li>
                    <!-- <li><a href="./profil.php" class="menuNav_button">Profil</a></li> -->


                    
                    <li class="menuNav_item">
                        <form action="./deconnexion.php" method="post">
                            <button type="submit" name="logout" class="menuNav_button btn menuNav_link menuNav_link-crossed">
                                <span>Log Out</span>
                            </button>
                        </form>
                    </li>
                    <!-- <li><form action="" method="post"><button type="submit" name="logout" class="menuNav_button btn">Log Out</button></form></li> -->

                <?php }?>

                <?php if(!isset($_SESSION['user'])){?>
                    <li class="menuNav_item">
                        <a href="./inscription.php" class="menuNav_button menuNav_link menuNav_link-crossed">
                            <span>Inscription</span>
                        </a>
                    </li>
                    <!-- <li><a href="./inscription.php" class="menuNav_button">Inscription</a></li> -->
                    
                    <li class="menuNav_item">
                        <a href="./connexion.php" class="menuNav_button menuNav_link menuNav_link-crossed">
                            <span>Connexion</span>
                        </a>
                    </li>
                    <!-- <li><a href="./connexion.php" class="menuNav_button">Connexion</a></li> -->
                <?php }?>
            </ul>
        </nav>
</header>