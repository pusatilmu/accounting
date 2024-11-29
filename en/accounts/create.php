<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $account_name = $_POST['account_name'];
  $account_type = $_POST['account_type'];

  $sql = "INSERT INTO accounts (account_name, account_type) VALUES ('$account_name', '$account_type')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Create Account</h2>
<form method="POST">
  Account Name: <input type="text" name="account_name"><br>
  Account Type:
  <select name="account_type">
    <option value="Asset">Asset</option>
    <option value="Liability">Liability</option>
    <option value="Equity">Equity</option>
    <option value="Revenue">Revenue</option>
    <option value="Expense">Expense</option>
  </select><br>
  <input type="submit" value="Create Account">
</form>