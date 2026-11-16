<?php

require_once "Database.php";
require_once "Produk.php";

$db = new Database();
$produk = new Produk($db->getConnection());

$id = $_GET['id'];

$data = $produk->cari($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $produk->ubah($id,$_POST['nama'],$_POST['harga'],$_POST['stok']
    );

    header("Location: index.php");
    exit;
}
?>

<h2>Edit Produk</h2>

<form method="post">
    Nama : <input type="text" name="nama"
    value="<?= $data['nama'] ?>" required><br>

    Harga : <input type="number" name="harga"
    value="<?= $data['harga'] ?>" required><br>

    Stok : <input type="number" name="stok"
    value="<?= $data['stok'] ?>" required><br>

    <button type="submit">Ubah</button>
</form>