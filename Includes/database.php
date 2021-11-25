<?php
session_start();
$bdd = mysqli_connect('localhost', 'root', '', 'livreor');
mysqli_set_charset($bdd, 'utf-8');
$queryUser = mysqli_query($bdd, "SELECT * FROM `utilisateurs`");
$user = mysqli_fetch_all($queryUser, MYSQLI_ASSOC);

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$password2 = htmlspecialchars($_POST['password2']);
?>