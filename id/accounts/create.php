<?php
include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $account_name = $_POST['account_name'];
  $account_type = $_POST['account_type'];

  $sql = "INSERT INTO accounts (account_name, account_type) VALUES ('$account_name', '$account_type')";
  if ($conn->query($sql) === TRUE) {
    echo "Rekor baru berhasil dibuat.";
    header("Location: index.php");
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Tambah Akun</h2>
<form method="POST">
  Nama Akun: <input type="text" name="account_name"><br>
  Tipe Akun:
  <select name="account_type">
    <option value="Asset">Aset</option>
    <option value="Liability">Kewajiban</option>
    <option value="Equity">Ekuitas</option>
    <option value="Revenue">Pendapatan</option>
    <option value="Expense">Beban</option>
  </select><br>
  <input type="submit" value="Buat Akun">
</form>