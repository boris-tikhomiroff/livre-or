<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Magritte || Home</title>
    <link href="./style/styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <?php echo '<link href="css/styles.css" rel="stylesheet" type="text/css" />'; ?>
    
</head>
<body>
    <?php require 'include/header.php'?>
    <!-- Parcour les différents messages stockés en SESSION -->
    <?php if(isset($_SESSION['flash'])): ?>
        <?php foreach($_SESSION['flash'] as $type => $message): ?>
            <div style="position: absolute; left: 3%; width: 500px;
                height: 80px;" class="popUpMsg"<?= $type; ?>>
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <main class="main" id="wrapper">
        <?php unset($_SESSION['flash']) ;?>
        <article class="mainHome">
            <p class="mainHome_intro">Clouds, pipes, bowler hats, and green apples: these remain some of the most immediately recognizable icons of René Magritte, the Belgian painter and well-known Surrealist. He produced a body of work that rendered such commonplace things strange, slotting them into unfamiliar or uncanny scenes, or deliberately mislabeling them in order to "make the most everyday objects shriek aloud".</p>
            <h1 class="mainHome_tittle">RENE MAGRITTE</h1>
        </article>
        <article class="homeGallery">
            <section class="homeGallery_img homeGallery_section1">
            </section>
            <section class="homeGallery_img homeGallery_section2">
            </section>
            <section class="homeGallery_img homeGallery_section3">
            </section>
            <section class="homeGallery_img homeGallery_section4">
            </section>
        </article>
    </main>
    <?php require 'include/footer.php'?>
</body>
</html>