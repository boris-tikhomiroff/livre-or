<?php
    // Connection BDD
    include("./Includes/database.php");

  if(isset($login)){
        
        $queryConnect = mysqli_query($bdd, "SELECT * FROM `utilisateurs` WHERE `login` = '$login'");
        $queryConnectResult = mysqli_fetch_all($queryConnect, MYSQLI_ASSOC);

        if(count($queryConnectResult) != 0){

            $passwordBdd = $queryConnectResult[0]["password"];
            
            if(password_verify($password, $passwordBdd)){
                $_SESSION["user"] = $queryConnectResult;
                header('location:index.php');
            }
        }
        elseif($login != $queryConnectResult['login']){
            $loginVerify = "*This login doesn't exist";
            echo $loginVerify;
        }
    }

    if(isset($_POST['connect']))
    {
        if(empty($login))
        {
        $loginEmptyError = "*Login empty";
        echo $loginEmptyError;
        }

        elseif(empty($password))
        {
        $passEmptyError = "*Password empty";
        echo $passEmptyError;
        }
        elseif($password != $queryConnectResult["password"]){
            $wrongpassword = "*Wrong password";
            echo $wrongpassword;
        }
    }

    if(isset($_POST['deconnect']))
    {
        session_destroy();
        echo "Vous êtes à présent déconnecté !";
    }

    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or || Connexion</title>
    <link href="./Style/styles.css" rel="stylesheet">
</head>
<body>
    <?php include("./Includes/header.php")?>    
    <main>
        <form action="" method="post">
            <label for="login"></label>
            <input type="text" name="login" id="login" placeholder="login">
            <label for="password"></label>
            <input type="text" name="password" id="password" placeholder="password">
            <input type="submit" value="connect" name="connect">
            <input type="submit" value="deconnect" name="deconnect">
        </form>
    </main>
    <?php include("./Includes/footer.php")?>
</body>
</html>