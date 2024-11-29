<?php
include_once '../config/db.php';

// Query untuk mengambil data dari tabel transaction_details dengan join ke transaksi dan akun
$sql = "
    SELECT td.transaction_detail_id, td.transaction_id, td.account_id, td.type, td.amount, t.description AS transaction_description, a.account_name 
    FROM transaction_details td
    JOIN transactions t ON td.transaction_id = t.transaction_id
    JOIN accounts a ON td.account_id = a.account_id
";
$result = $conn->query($sql);

echo "<h2>Detail Transaksi</h2>";
echo "<a href='create.php'>Buat Detail Transaksi Baru</a><br>";

echo "<table border='1'>
        <tr>
            <th>Deskripsi Transaksi</th>
            <th>Nama Akun</th>
            <th>Tipe (Debit/Kredit)</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['transaction_description'] . "</td>
            <td>" . $row['account_name'] . "</td>
            <td>" . $row['type'] . "</td>
            <td>" . $row['amount'] . "</td>
            <td>
                <a href='update.php?id=" . $row['transaction_detail_id'] . "'>Ubah</a> | 
                <a href='delete.php?id=" . $row['transaction_detail_id'] . "'>Hapus</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
