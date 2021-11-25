<?php
     // Connection BDD
     include("./Includes/database.php");

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);

    // var_dump($user);
    if(isset($login) 
    && (!empty($login)) 
    && isset($password) 
    && (!empty($password)))
    {
        
        $loginCheck = mysqli_query($bdd, "SELECT `login` FROM `utilisateurs` WHERE `login` = '$login'");
        $loginCheckResult = mysqli_fetch_all($loginCheck, MYSQLI_ASSOC);

        if(count($loginCheckResult) != 0)
        {
            $loginUnavailableError = "*Login not available";
            echo $loginUnavailableError;
        }

        elseif($password == $password2){
            // $PassError = "*Different password";
            // echo $PassError;
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $addUser = mysqli_query($bdd, "INSERT INTO `utilisateurs`(`login`,`password`) VALUES ('$login','$hashPassword')");
        }
    }
    if(isset($_POST['submit']))
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

        elseif($password != $password2){
            $passwordNotMatch = "Different password";
            echo $passwordNotMatch;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or || Page d'accueil</title>
    <link href="./Style/styles.css" rel="stylesheet">
</head>
<body>
    <?php include("./Includes/header.php")?>
    <main>
        <form action="" method="post">
            <h1>Sign up</h1>
            <label for="login"></label>
            <input type="text" id="login" name="login" placeholder="Choose your login" >
            <label for="password"></label>
            <input type="text" id="password" name="password" placeholder="Choose your password">
            <label for="password2"></label>
            <input type="text" id="password2" name="password2" placeholder="Confirm your password">
            <input type="submit" name="submit" value="submit">
        </form>
    </main>
    <?php include("./Includes/footer.php")?>
</body>
</html>