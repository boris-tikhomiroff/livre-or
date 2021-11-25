<?php
$bdd = mysqli_connect('localhost', 'root', '', 'livreor');
mysqli_set_charset($bdd, 'utf-8');
$queryUser = mysqli_query($bdd, "SELECT * FROM `utilisateurs`");
$user = mysqli_fetch_all($queryUser, MYSQLI_ASSOC);
?>