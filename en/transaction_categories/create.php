<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Ambil data dari form
  $category_name = $_POST['category_name'];

  // SQL untuk memasukkan data ke dalam tabel transaction_categories
  $sql = "INSERT INTO transaction_categories (category_name) VALUES ('$category_name')";

  if ($conn->query($sql) === TRUE) {
    echo "New category created successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Create New Transaction Category</h2>
<form method="POST">
  Category Name: <input type="text" name="category_name" required><br>
  <input type="submit" value="Create Category">
</form>