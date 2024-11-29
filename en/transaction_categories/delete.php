<?php
include_once '../config/db.php';

// Cek apakah ID kategori ada di URL
if (isset($_GET['id'])) {
  $category_id = $_GET['id'];

  // SQL untuk menghapus kategori berdasarkan ID
  $sql = "DELETE FROM transaction_categories WHERE category_id = $category_id";

  if ($conn->query($sql) === TRUE) {
    echo "Category deleted successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
