<?php
    // connexion BDD
    include("./Includes/database.php");

    // $commentQuery = mysqli_query($bdd,"SELECT * FROM `commentaires` ORDER BY `date` DESC");

    $commentQuery = mysqli_query($bdd,"SELECT utilisateurs.login, commentaires.* FROM `utilisateurs` INNER JOIN `commentaires` WHERE utilisateurs.id = commentaires.id_utilisateur ORDER BY `date` DESC");


    if(isset($_POST['submit'])){
        $loginSession = $_SESSION['user'][0]['login'];
        $idUser = $_SESSION['user'][0]['id'];
        $date = date("Y/m/d H:i:s");
        $userComment = $_POST['com'];

        $queryComment = mysqli_query($bdd, "INSERT INTO `commentaires`(`commentaire`, `id_utilisateur`, `date`) VALUES ('$userComment','$idUser','$date')");
        $sentMsg ="your message has been sent";
        header('Refresh:0');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or ||Livre d'or</title>
    <link href="./Style/styles.css" rel="stylesheet">
</head>

<body>
    <?php include("./Includes/header.php")?>
    <main>
        <article>
            <?php
                foreach($commentQuery as $comments):?>
                    <section>
                        <?= $comments['commentaire'];?>
                        <?= $comments['date'];?>
                        <?= $comments['login'];?>
                    <section>
            <?php endforeach;?>
        </article>
        <article>
            <?php if(isset($_SESSION["user"])){?>

                <form action="" method="post">
                    <label for="comment"></label>
                    <input type="text" id="comment" name="com">
                    <button type="submit" value="submit" name="submit">Submit</button>
                </form>
            <?php } ?>
            <?php echo $sentMsg?>
        </article>
    </main>
    <?php include("./Includes/footer.php")?>
</body>
</html>