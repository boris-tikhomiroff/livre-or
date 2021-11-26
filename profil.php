<?php
    // Connection BDD
    include("./Includes/database.php");

    $loginSession = $_SESSION["user"][0]["login"];
    $passwordSession = $_SESSION["user"][0]["password"];
    
    $newLogin = $login;
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $newPass = $hashPassword;
    
    $query= mysqli_query($bdd, "SELECT * FROM `utilisateurs` WHERE `login` = '$loginSession'");
    $queryResult = mysqli_fetch_assoc($query);
        
    if(isset($_POST['submitLogin']))
    {
        $login = $queryResult['login'];
        $updateLogin = mysqli_query($bdd, "UPDATE `utilisateurs` SET `login`= '$newLogin' WHERE `login` = '$loginSession'");
        $updateQuery = mysqli_query($bdd, $updateLogin);
        session_destroy();
        header('Location:connexion.php');
    }

    if(isset($_POST['submitPassword']))
    {
        $login = $queryResult['password'];
        $updatePassword = mysqli_query($bdd, "UPDATE `utilisateurs` SET `password`= '$newPass' WHERE `login` = '$loginSession'");
        $updateQuery = mysqli_query($bdd, $updatePassword);
        session_destroy();
        header('Location:connexion.php');
    }
    var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or || Page de Profil</title>
    <link href="./Style/styles.css" rel="stylesheet">
</head>
<body>
    <?php include("./Includes/header.php")?>

    <main>
    <form action="" method="post">
            <h1>Update your profil</h1>

            <div>
                <label for="login"></label>
                <input type="text" id="login" name="login" value="<?php echo $loginSession;?>" >
                <input type="submit" name="submitLogin" value="New Login">
            </div>

            <div>
                <label for="password"></label>
                <input type="text" id="password" name="password" value="<?php echo $passwordSession;?>">
                <input type="submit" name="submitPassword" value="New Password">
            </div>
        </form>
    </main>

    <?php include("./Includes/footer.php")?>
</body>
</html> 