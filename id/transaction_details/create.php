<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $transaction_id = $_POST['transaction_id'];
  $account_id = $_POST['account_id'];
  $type = $_POST['type'];
  $amount = $_POST['amount'];

  // SQL untuk memasukkan data ke dalam tabel transaction_details
  $sql = "INSERT INTO transaction_details (transaction_id, account_id, type, amount) 
            VALUES ('$transaction_id', '$account_id', '$type', '$amount')";

  if ($conn->query($sql) === TRUE) {
    echo "Detail transaksi baru berhasil dibuat.";
    header("Location: index.php");
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Buat Detail Transaksi Baru</h2>
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

  Akun:
  <select name="account_id" required>
    <?php
    // Ambil semua akun
    $account_sql = "SELECT * FROM accounts";
    $account_result = $conn->query($account_sql);
    while ($account = $account_result->fetch_assoc()) {
      echo "<option value='" . $account['account_id'] . "'>" . $account['account_name'] . "</option>";
    }
    ?>
  </select><br>

  Tipe:
  <select name="type" required>
    <option value="Debit">Debit</option>
    <option value="Credit">Kredit</option>
  </select><br>

  Jumlah: <input type="number" name="amount" step="0.01" required><br>

  <input type="submit" value="Buat Detail Transaksi">
</form>