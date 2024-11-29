<?php
include_once '../config/db.php';

if (isset($_GET['id']) && isset($_GET['category_id'])) {
  $transaction_id = $_GET['id'];
  $category_id = $_GET['category_id'];

  // Query untuk mengambil data link yang akan diedit
  $result = $conn->query("
        SELECT tcl.transaction_id, tcl.category_id, t.description, tc.category_name 
        FROM transaction_category_links tcl
        JOIN transactions t ON tcl.transaction_id = t.transaction_id
        JOIN transaction_categories tc ON tcl.category_id = tc.category_id
        WHERE tcl.transaction_id = $transaction_id AND tcl.category_id = $category_id
    ");
  $row = $result->fetch_assoc();
}

// Proses form untuk update link
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $new_transaction_id = $_POST['transaction_id'];
  $new_category_id = $_POST['category_id'];

  // SQL untuk mengupdate data transaction_category_links
  $sql = "UPDATE transaction_category_links SET transaction_id = '$new_transaction_id', category_id = '$new_category_id' WHERE transaction_id = $transaction_id AND category_id = $category_id";

  if ($conn->query($sql) === TRUE) {
    echo "Tautan berhasil diperbarui.";
    header("Location: index.php");
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Perbarui Tautan Transaksi-Kategori</h2>
<form method="POST">
  Transaksi:
  <select name="transaction_id" required>
    <?php
    // Ambil semua transaksi
    $transaction_sql = "SELECT * FROM transactions";
    $transaction_result = $conn->query($transaction_sql);
    while ($transaction = $transaction_result->fetch_assoc()) {
      $selected = ($row['transaction_id'] == $transaction['transaction_id']) ? "selected" : "";
      echo "<option value='" . $transaction['transaction_id'] . "' $selected>" . $transaction['description'] . "</option>";
    }
    ?>
  </select><br>

  Kategori:
  <select name="category_id" required>
    <?php
    // Ambil semua kategori
    $category_sql = "SELECT * FROM transaction_categories";
    $category_result = $conn->query($category_sql);
    while ($category = $category_result->fetch_assoc()) {
      $selected = ($row['category_id'] == $category['category_id']) ? "selected" : "";
      echo "<option value='" . $category['category_id'] . "' $selected>" . $category['category_name'] . "</option>";
    }
    ?>
  </select><br>

  <input type="submit" value="Perbarui Tautan">
</form>