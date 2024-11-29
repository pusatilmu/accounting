<?php
include_once '../config/db.php';

if (isset($_GET['id'])) {
  $transaction_detail_id = $_GET['id'];
  // Query untuk mengambil data detail transaksi yang akan diedit
  $result = $conn->query("SELECT td.transaction_detail_id, td.transaction_id, td.account_id, td.type, td.amount, t.description AS transaction_description, a.account_name 
                            FROM transaction_details td
                            JOIN transactions t ON td.transaction_id = t.transaction_id
                            JOIN accounts a ON td.account_id = a.account_id
                            WHERE td.transaction_detail_id = $transaction_detail_id");
  $row = $result->fetch_assoc();
}

// Proses form untuk update detail transaksi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $transaction_id = $_POST['transaction_id'];
  $account_id = $_POST['account_id'];
  $type = $_POST['type'];
  $amount = $_POST['amount'];

  // SQL untuk mengupdate data transaction_details
  $sql = "UPDATE transaction_details 
            SET transaction_id = '$transaction_id', account_id = '$account_id', type = '$type', amount = '$amount' 
            WHERE transaction_detail_id = $transaction_detail_id";

  if ($conn->query($sql) === TRUE) {
    echo "Transaction detail updated successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Update Transaction Detail</h2>
<form method="POST">
  Transaction:
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

  Account:
  <select name="account_id" required>
    <?php
    // Ambil semua akun
    $account_sql = "SELECT * FROM accounts";
    $account_result = $conn->query($account_sql);
    while ($account = $account_result->fetch_assoc()) {
      $selected = ($row['account_id'] == $account['account_id']) ? "selected" : "";
      echo "<option value='" . $account['account_id'] . "' $selected>" . $account['account_name'] . "</option>";
    }
    ?>
  </select><br>

  Type:
  <select name="type" required>
    <option value="Debit" <?php if ($row['type'] == 'Debit') echo 'selected'; ?>>Debit</option>
    <option value="Credit" <?php if ($row['type'] == 'Credit') echo 'selected'; ?>>Credit</option>
  </select><br>

  Amount: <input type="number" name="amount" step="0.01" value="<?php echo $row['amount']; ?>" required><br>

  <input type="submit" value="Update Transaction Detail">
</form>