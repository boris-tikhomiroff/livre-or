<?php
    session_start();

    require_once './include/db.php';

    $commentQuery = mysqli_query($bdd,"SELECT utilisateurs.login, commentaires.* FROM `utilisateurs` INNER JOIN `commentaires` WHERE utilisateurs.id = commentaires.id_utilisateur ORDER BY `date` DESC");

    if(isset($_POST['submit'])){
        $idUser = $_SESSION['userId'];
        $date = date("Y/m/d H:i:s");
        $userComment = $_POST['com'];

        $queryComment = mysqli_query($bdd, "INSERT INTO `commentaires`(`commentaire`, `id_utilisateur`, `date`) VALUES ('$userComment','$idUser','$date')");
        header("Refresh:0");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Magritte || Golden Book</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <link href="./style/styles.css" rel="stylesheet">
</head>
<body>
    <?php require 'include/header.php'?>
    <main class="main_golden">
        <article class="main_golden-left">
            <h1>All Messages</h1>
            <?php
                foreach($commentQuery as $comments):?>
                    <section class="golden_comment">
                    <div class="golden_comment-content">
                        <?= "<div>".$comments['commentaire']."</div>";?>
                        <?= "<div><span>par </span>".$comments['login']."</div>";?>
                        <?= "<div><span>posté le </span>".$comments['date']."</div>";?>
                    </div>
                    <section>
            <?php endforeach;?>
        </article>
        <article class="main_golden-right">
            <?php if(isset($_SESSION["user"])){?>

                <form action="" method="post" class="form">

                    <h1 class="formTittle">Write a message</h1>

                    <div class="formSection formSection1">
                        <label for="comment"></label>
                        <textarea type="text" id="comment" name="com" class="formText" placeholder="Message" cols="30" rows="10"></textarea>
                    </div>

                    <div class="formSection formSection2">
                        <button type="submit" value="submit" name="submit" class="formButton">Submit</button>
                    </div>
                    
                </form>

            <?php } ?>
        </article>
    </main>
    <?php require 'include/footer.php'?>
</body>
</html>