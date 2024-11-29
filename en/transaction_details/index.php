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

echo "<h2>Transaction Details</h2>";
echo "<a href='create.php'>Create New Transaction Detail</a><br>";

echo "<table border='1'>
        <tr>
            <th>Transaction Description</th>
            <th>Account Name</th>
            <th>Type (Debit/Credit)</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['transaction_description'] . "</td>
            <td>" . $row['account_name'] . "</td>
            <td>" . $row['type'] . "</td>
            <td>" . $row['amount'] . "</td>
            <td>
                <a href='update.php?id=" . $row['transaction_detail_id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['transaction_detail_id'] . "'>Delete</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
