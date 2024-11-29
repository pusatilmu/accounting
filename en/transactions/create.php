<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Ambil data dari form
  $date = $_POST['date'];
  $description = $_POST['description'];
  $total = $_POST['total'];

  // SQL untuk memasukkan data ke dalam tabel transactions
  $sql = "INSERT INTO transactions (date, description, total) VALUES ('$date', '$description', '$total')";

  if ($conn->query($sql) === TRUE) {
    echo "New transaction created successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Create New Transaction</h2>
<form method="POST">
  Date: <input type="date" name="date" required><br>
  Description: <input type="text" name="description" required><br>
  Total: <input type="number" name="total" step="0.01" required><br>
  <input type="submit" value="Create Transaction">
</form>