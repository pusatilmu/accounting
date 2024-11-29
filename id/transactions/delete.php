<?php
include_once '../config/db.php';

// Cek apakah ID transaksi ada di URL
if (isset($_GET['id'])) {
  $transaction_id = $_GET['id'];

  // SQL untuk menghapus transaksi berdasarkan ID
  $sql = "DELETE FROM transactions WHERE transaction_id = $transaction_id";

  if ($conn->query($sql) === TRUE) {
    echo "Transaksi berhasil dihapus.";
    header("Location: index.php");
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
