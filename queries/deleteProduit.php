<?php
include('../db_connect.php');
$id = $_GET['row_id'];
$dbs->exec("UPDATE produit SET prd_del = '1' WHERE `prd_id`= $id;");
header("Location: ../gestion_produits.php");
exit;
?>