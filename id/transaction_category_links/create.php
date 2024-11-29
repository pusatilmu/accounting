<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $transaction_id = $_POST['transaction_id'];
  $category_id = $_POST['category_id'];

  // SQL untuk memasukkan data ke dalam tabel transaction_category_links
  $sql = "INSERT INTO transaction_category_links (transaction_id, category_id) VALUES ('$transaction_id', '$category_id')";

  if ($conn->query($sql) === TRUE) {
    echo "Tautan baru berhasil dibuat.";
    header("Location: index.php");
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Buat Tautan Transaksi-Kategori Baru</h2>
<form method="POST">
  Transaksi:
  <select name="transaction_id" required>
    <?php
    // Ambil semua transaksi
    $transaction_sql = "SELECT * FROM transactions";
    $transaction_result = $conn->query($transaction_sql);
    while ($transaction = $transaction_result->fetch_assoc()) {
      echo "<option value='" . $transaction['transaction_id'] . "'>" . $transaction['description'] . "</option>";
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
      echo "<option value='" . $category['category_id'] . "'>" . $category['category_name'] . "</option>";
    }
    ?>
  </select><br>

  <input type="submit" value="Buat Tautan">
</form>