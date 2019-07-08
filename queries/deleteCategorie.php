<?php
include('../db_connect.php');
$id = $_GET['row_id'];
$dbs->exec("UPDATE categorie SET cat_del = '1' WHERE `cat_id`= $id;");
header("Location: ../gestion_categories.php");
exit;
?>