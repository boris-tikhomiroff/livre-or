<?php
    session_start();
    require './include/db.php';


    if(!isset($_SESSION["user"])){
        $_SESSION['flash']['error'] ="All changes have been made, you can log back in.";
        header('location: index.php');
        exit();
    }
    
    $loginSession = $_SESSION['user'];
    $passwordSession = $_SESSION['userPass'];

    
    $query= mysqli_query($bdd, "SELECT * FROM `utilisateurs` WHERE `login` = '$loginSession'");
    $queryResult = mysqli_fetch_assoc($query);
    
    if(isset($_POST['submitLogin']))
    {
        if(empty($_POST['login'])){
            $errors['login'] = "Your login is not valid";
        }
            
        else{
        $newLogin = $_POST['login'];
        $login = $queryResult['login'];
        $updateLogin = mysqli_query($bdd, "UPDATE `utilisateurs` SET `login`= '$newLogin' WHERE `login` = '$loginSession'");
        $updateQuery = mysqli_query($bdd, $updateLogin);
        $_SESSION['flash']['sucess'] = "Your login has been changed, you can relog.";
        session_destroy();
        header('Location:connexion.php');
        }
    }
        
    if(isset($_POST['submitPassword']))
    {
        if(empty($_POST['password'])){
            $errors['password'] = "You must enter a valid password";
        }

        if($_POST['password'] != $_POST['password_confirm']){
            $errors['password_confirm'] = "Your password doesn't match";
        }
        else{
        $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $newPass = $hashPassword;
        $login = $queryResult['password'];
        $updatePassword = mysqli_query($bdd, "UPDATE `utilisateurs` SET `password`= '$newPass' WHERE `login` = '$loginSession'");
        $updateQuery = mysqli_query($bdd, $updatePassword);
        session_destroy();
        header('Location:connexion.php');
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Magritte || Profil</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <link href="./style/styles.css" rel="stylesheet">
</head>
<body>
    <?php require 'include/header.php'?>
    <main class="main_form">

            <!-- Parcoure les potentielles erreurs -->
        <?php if(!empty($errors)): ?>
                <div class="errors">
                    <p>You have not completed the form correctly.</p>
                    </ul>
                        <?php foreach($errors as $error): ?>
                            <li><?= $error; ?></li>

                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php endif; ?>
    
        
        <form action="" method="post" class="form">
            <h1 class="formTittle">Welcome <?= $_SESSION['user']?></h1>
            <div class="formSection formSection1">
                    <label for="login"></label>
                    <input type="text" name="login" placeholder="Change your login" class="formText">
            </div>

            <div class="formSection formSection2">
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Change your password" class="formText">
            </div>
            
            </div>
            <div class="formSection formSection3">
                    <label for="password_confirm"></label>
                    <input type="password" name="password_confirm" placeholder="Confirm your password" class="formText">
            </div>
                    
            <div class="formSection formSection4">
                    <button type="submit" name="submitLogin" class="formButton">New Login</button>
                    <button type="submit" name="submitPassword" class="formButton">New password</button>
            </div>
            
            <a href="index.php" class="formBack formSection ">Cancel</a>
        </form>

    </main>
    <?php require 'include/footer.php'?>
</body>
</html>
