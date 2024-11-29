<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Ambil data dari form
  $category_name = $_POST['category_name'];

  // SQL untuk memasukkan data ke dalam tabel transaction_categories
  $sql = "INSERT INTO transaction_categories (category_name) VALUES ('$category_name')";

  if ($conn->query($sql) === TRUE) {
    echo "Kategori baru berhasil dibuat.";
    header("Location: index.php");
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Tambah Kategori Transaksi Baru</h2>
<form method="POST">
  Nama Kategori: <input type="text" name="category_name" required><br>
  <input type="submit" value="Buat Kategori">
</form>