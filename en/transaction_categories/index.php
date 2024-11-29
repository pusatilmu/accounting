<?php
include_once '../config/db.php';

// Query untuk mengambil data dari tabel transaction_categories
$sql = "SELECT * FROM transaction_categories";
$result = $conn->query($sql);

echo "<h2>Transaction Categories</h2>";
echo "<a href='create.php'>Create New Category</a><br>";

echo "<table border='1'>
        <tr>
            <th>Category Name</th>
            <th>Actions</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['category_name'] . "</td>
            <td>
                <a href='update.php?id=" . $row['category_id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['category_id'] . "'>Delete</a>
            </td>
        </tr>";
}

echo "</table>";

$conn->close();
