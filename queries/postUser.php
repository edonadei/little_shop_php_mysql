<?php
include('../db_connect.php');

$id = $_POST['usr_id'];
$name = $_POST['usr_name'];
$firstname = $_POST['usr_firstname'];
$email = $_POST['usr_email'];
$city = $_POST['usr_city'];
$phone = $_POST['usr_phone'];

$cmd = ("UPDATE utilisateur 
  SET
    usr_nom = '$name',
    usr_prenom = '$firstname',
    usr_email = '$email',
    usr_ville= '$city',
    usr_tel = '$phone' 
    WHERE usr_id = '$id'");

$dbs->exec($cmd);
header("Location: /webvp/gestion_utilisateurs.php");
exit;
