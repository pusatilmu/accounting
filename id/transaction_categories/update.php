<?php
include_once '../config/db.php';

// Cek apakah ID kategori ada di URL
if (isset($_GET['id'])) {
  $category_id = $_GET['id'];
  // Query untuk mengambil data kategori yang akan diedit
  $result = $conn->query("SELECT * FROM transaction_categories WHERE category_id = $category_id");
  $row = $result->fetch_assoc();
}

// Proses form untuk update kategori
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $category_name = $_POST['category_name'];

  // SQL untuk mengupdate data kategori
  $sql = "UPDATE transaction_categories SET category_name='$category_name' WHERE category_id = $category_id";

  if ($conn->query($sql) === TRUE) {
    echo "Kategori berhasil diperbarui.";
    header("Location: index.php");
  } else {
    echo "Kesalahan: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Perbarui Kategori Transaksi</h2>
<form method="POST">
  Nama Kategori: <input type="text" name="category_name" value="<?php echo $row['category_name']; ?>" required><br>
  <input type="submit" value="Perbarui Kategori">
</form>