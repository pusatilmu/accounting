<?php
include_once '../config/db.php';

// Query untuk mengambil data dari tabel transactions
$sql = "SELECT * FROM transactions";
$result = $conn->query($sql);

echo "<h2>Transaksi</h2>";
echo "<a href='create.php'>Buat Transaksi Baru</a><br>";

echo "<table border='1'>
        <tr>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['date'] . "</td>
            <td>" . $row['description'] . "</td>
            <td>" . $row['total'] . "</td>
            <td>
                <a href='update.php?id=" . $row['transaction_id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['transaction_id'] . "'>Hapus</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
