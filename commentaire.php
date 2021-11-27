<?php
    include("./Includes/database.php");

    
    $idUser = $_SESSION['user'][0]['id'];
    var_dump($idUser);

    if(isset($_POST['send']))
    { $userComment = $_POST['userComment'];
      $date = date("Y/m/d H:i:s");

            $queryComment = mysqli_query($bdd, "INSERT INTO `commentaires`(`commentaire`, `id_utilisateur`, `date`) VALUES ('".$userComment."','$idUser','$date')");
            header("Refresh:0");
            $sentMsg ="your message has been sent";
            echo $sentMsg;
    }
    // echo $userComment;
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or || Commentaire</title>
    <link href="./Style/styles.css" rel="stylesheet">
</head>
<body>
    <?php include("./Includes/header.php")?>
    <main>
        <h1>Bonjour <?php echo $_SESSION["user"][0]["login"]?></h1>
        <form action="" method="post">
            <label for="comment"></label>
            <!-- <input name="userComment" id="comment" cols="50" rows="10"> -->
            <textarea name="userComment" id="comment" cols="50" rows="10"></textarea>
            <input type="submit" name="send" value="send">
        </form>
    </main>
    <?php include("./Includes/footer.php")?>
</body>
</html>