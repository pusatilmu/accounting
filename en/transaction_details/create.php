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
    echo "New transaction detail created successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Create New Transaction Detail</h2>
<form method="POST">
  Transaction:
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

  Account:
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

  Type:
  <select name="type" required>
    <option value="Debit">Debit</option>
    <option value="Credit">Credit</option>
  </select><br>

  Amount: <input type="number" name="amount" step="0.01" required><br>

  <input type="submit" value="Create Transaction Detail">
</form>