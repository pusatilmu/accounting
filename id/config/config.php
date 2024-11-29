<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');  // Ganti dengan username MySQL Anda
define('DB_PASSWORD', '');      // Ganti dengan password MySQL Anda
define('DB_NAME', 'accounting');  // Ganti dengan nama database Anda

// Koneksi ke database
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Cek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
