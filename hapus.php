<?php

require_once "Database.php";
require_once "Produk.php";

$db = new Database();
$produk = new Produk($db->getConnection());

$id = $_GET['id'];

$produk->hapus($id);

header("Location: index.php");
exit;

?>