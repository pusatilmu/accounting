<?php
include_once '../config/db.php';

if (isset($_GET['id'])) {
  $account_id = $_GET['id'];
  $result = $conn->query("SELECT * FROM accounts WHERE account_id = $account_id");
  $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $account_name = $_POST['account_name'];
  $account_type = $_POST['account_type'];

  $sql = "UPDATE accounts SET account_name = '$account_name', account_type = '$account_type' WHERE account_id = $account_id";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Update Account</h2>
<form method="POST">
  Account Name: <input type="text" name="account_name" value="<?php echo $row['account_name']; ?>"><br>
  Account Type:
  <select name="account_type">
    <option value="Asset" <?php if ($row['account_type'] == 'Asset') echo 'selected'; ?>>Asset</option>
    <option value="Liability" <?php if ($row['account_type'] == 'Liability') echo 'selected'; ?>>Liability</option>
    <option value="Equity" <?php if ($row['account_type'] == 'Equity') echo 'selected'; ?>>Equity</option>
    <option value="Revenue" <?php if ($row['account_type'] == 'Revenue') echo 'selected'; ?>>Revenue</option>
    <option value="Expense" <?php if ($row['account_type'] == 'Expense') echo 'selected'; ?>>Expense</option>
  </select><br>
  <input type="submit" value="Update Account">
</form>