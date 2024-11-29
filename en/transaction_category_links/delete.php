<?php
include_once '../config/db.php';

if (isset($_GET['id']) && isset($_GET['category_id'])) {
  $transaction_id = $_GET['id'];
  $category_id = $_GET['category_id'];

  // SQL untuk menghapus link berdasarkan transaction_id dan category_id
  $sql = "DELETE FROM transaction_category_links WHERE transaction_id = $transaction_id AND category_id = $category_id";

  if ($conn->query($sql) === TRUE) {
    echo "Link deleted successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
