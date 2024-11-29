<?php
include_once '../config/db.php';

// Query untuk mengambil data dari tabel accounts
$sql = "SELECT * FROM accounts";
$result = $conn->query($sql);

echo "<h2>Accounts</h2>";
echo "<a href='create.php'>Create New Account</a><br>";

echo "<table border='1'>
        <tr>
            <th>Account Name</th>
            <th>Account Type</th>
            <th>Actions</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['account_name'] . "</td>
            <td>" . $row['account_type'] . "</td>
            <td>
                <a href='update.php?id=" . $row['account_id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['account_id'] . "'>Delete</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
