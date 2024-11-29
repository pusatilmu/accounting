<?php
include_once '../config/db.php';

// Query untuk mengambil data dari tabel transaction_category_links dengan join ke transaksi dan kategori
$sql = "
    SELECT tcl.transaction_id, tcl.category_id, t.transaction_id, t.description, tc.category_name 
    FROM transaction_category_links tcl
    JOIN transactions t ON tcl.transaction_id = t.transaction_id
    JOIN transaction_categories tc ON tcl.category_id = tc.category_id
";
$result = $conn->query($sql);

echo "<h2>Tautan Transaksi-Kategori</h2>";
echo "<a href='create.php'>Buat Tautan Baru</a><br>";

echo "<table border='1'>
        <tr>
            <th>Deskripsi Transaksi</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['description'] . "</td>
            <td>" . $row['category_name'] . "</td>
            <td>
                <a href='update.php?id=" . $row['transaction_id'] . "&category_id=" . $row['category_id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['transaction_id'] . "&category_id=" . $row['category_id'] . "'>Hapus</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
