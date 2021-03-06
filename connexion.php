<?php
    if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['password'])){

        $login = $_POST['login'];
        $password = $_POST['password'];
        $errors = array();
        require_once './include/db.php';

        // Requete
        $query = mysqli_query($bdd, "SELECT * FROM `utilisateurs` WHERE `login` = '$login'");
        $user = mysqli_fetch_all($query, MYSQLI_ASSOC);

        if(password_verify($password, $user['0']['password'])){
            session_start();
            $_SESSION['user'] = $user['0']['login'];
            $_SESSION['userPass'] = $user['0']['password'];
            $_SESSION['userId'] = $user['0']['id'];
            $_SESSION['flash']['error'] = "You are logged now. ";
            header('location: index.php');
        }
        else {
                $errors['connect'] = "Incorrect login or password";
        }     
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Magritte || Log in</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <link href="./style/styles.css" rel="stylesheet">
</head>
<body>
    <?php require 'include/header.php'?>
    <main class="main main_form">

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

            <h1 class="formTittle">Log in</h1>

            <div class="formSection formSection1">
                <label for="login"></label>
                <input type="text" name="login" placeholder="Your login" class="formText">
            </div>

            <div class="formSection formSection2">
                <label for="password"></label>
                <input type="password" name="password" placeholder="Your password" class="formText">
            </div>
            
            <div class="formSection  formSection3">
                <button type="submit" name="submit" class="formButton">Submit</button>
            </div>
        </form>
    </main>
    <?php require 'include/footer.php'?>
</body>
</html>