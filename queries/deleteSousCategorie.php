<?php
include('../db_connect.php');
$id = $_GET['row_id'];
$dbs->exec("UPDATE sous_categorie SET sct_del = '1' WHERE `sct_id`= $id;");
header("Location: ../gestion_sous_categories.php");
exit;
?>