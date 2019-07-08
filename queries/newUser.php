<?php
include('../db_connect.php');

$id = $_POST['usr_id'];
$dep = $_POST['usr_dep'];
$login = $_POST['usr_login'];
$pwd = $_POST['usr_pwd'];
$name = $_POST['usr_name'];
$firstname = $_POST['usr_firstname'];
$email = $_POST['usr_email'];
$city = $_POST['usr_city'];
$phone = $_POST['usr_phone'];

$cmd = ("INSERT INTO utilisateur 
  VALUES(
      0,
      '$name',
      '$firstname',
      '$email',
      '$login',
      '$pwd',
      '$dep',
      '$city',
      '$phone',
      0)");

$created = true;
$dbs->exec($cmd);
header("Location: /webvp/gestion_utilisateurs.php?created=" . $created);
exit;
