<?php
include_once '../config/db.php';

// Query untuk mengambil data dari tabel transactions
$sql = "SELECT * FROM transactions";
$result = $conn->query($sql);

echo "<h2>Transactions</h2>";
echo "<a href='create.php'>Create New Transaction</a><br>";

echo "<table border='1'>
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['date'] . "</td>
            <td>" . $row['description'] . "</td>
            <td>" . $row['total'] . "</td>
            <td>
                <a href='update.php?id=" . $row['transaction_id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['transaction_id'] . "'>Delete</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
