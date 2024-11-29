<?php
include_once '../config/db.php';

// Cek apakah ID transaksi ada di URL
if (isset($_GET['id'])) {
  $transaction_id = $_GET['id'];
  // Query untuk mengambil data transaksi yang akan diedit
  $result = $conn->query("SELECT * FROM transactions WHERE transaction_id = $transaction_id");
  $row = $result->fetch_assoc();
}

// Proses form untuk update transaksi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $date = $_POST['date'];
  $description = $_POST['description'];
  $total = $_POST['total'];

  // SQL untuk mengupdate data transaksi
  $sql = "UPDATE transactions SET date='$date', description='$description', total='$total' WHERE transaction_id = $transaction_id";

  if ($conn->query($sql) === TRUE) {
    echo "Transaction updated successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Update Transaction</h2>
<form method="POST">
  Date: <input type="date" name="date" value="<?php echo $row['date']; ?>" required><br>
  Description: <input type="text" name="description" value="<?php echo $row['description']; ?>" required><br>
  Total: <input type="number" name="total" value="<?php echo $row['total']; ?>" step="0.01" required><br>
  <input type="submit" value="Update Transaction">
</form>