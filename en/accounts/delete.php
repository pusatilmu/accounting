<?php
include_once '../config/db.php';

if (isset($_GET['id'])) {
  $account_id = $_GET['id'];
  $sql = "DELETE FROM accounts WHERE account_id = $account_id";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.";
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
