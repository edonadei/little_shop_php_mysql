<?php
include('../db_connect.php');
$id = $_GET['row_id'];
$dbs->exec("UPDATE utilisateur SET usr_del = '1' WHERE `usr_id`= $id;");
$deleted = "true";
header("Location: ../gestion_utilisateurs.php?deleted=" .$deleted);
exit;
?>