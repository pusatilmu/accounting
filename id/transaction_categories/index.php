<?php
include_once '../config/db.php';

// Query untuk mengambil data dari tabel transaction_categories
$sql = "SELECT * FROM transaction_categories";
$result = $conn->query($sql);

echo "<h2>Kategori Transaksi</h2>";
echo "<a href='create.php'>Buat Kategori Baru</a><br>";

echo "<table border='1'>
        <tr>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['category_name'] . "</td>
            <td>
                <a href='update.php?id=" . $row['category_id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['category_id'] . "'>Hapus</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
