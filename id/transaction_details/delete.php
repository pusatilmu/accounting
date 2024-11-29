<?php
include_once '../config/db.php';

// Cek apakah ID transaksi detail ada di URL
if (isset($_GET['id'])) {
  $transaction_detail_id = $_GET['id'];

  // Query untuk menghapus data transaksi detail berdasarkan transaction_detail_id
  $sql = "DELETE FROM transaction_details WHERE transaction_detail_id = $transaction_detail_id";

  if ($conn->query($sql) === TRUE) {
    echo "Detail transaksi berhasil dihapus.";
    header("Location: index.php"); // Kembali ke halaman index setelah penghapusan
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
