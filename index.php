<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financial Management Application</title>
  <style>
    /* ==============================
    Kelas untuk Body dan Umum
    ============================== */
    .body {
      background-color: #333333;
      /* Warna latar belakang gelap */
      color: white;
      /* Warna teks putih */
      font-family: Arial, sans-serif;
      /* Font default */
      text-align: center;
      /* Menyelaraskan teks ke tengah */
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .h2-title {
      font-size: 1.8rem;
      /* Ukuran font judul lebih kecil */
      margin-top: 0;
      text-shadow: 3px 3px 6px rgba(255, 215, 0, 0.8), -3px -3px 6px rgba(255, 215, 0, 0.8);
      /* Bayangan kuning yang lebih kuat */
    }

    .button-container {
      margin-top: 20px;
    }

    /* ==============================
    Kelas untuk Tombol
    ============================== */
    .button {
      display: block;
      /* Tombol tampil vertikal */
      color: #333333;
      /* Teks tombol hitam */
      font-size: 1rem;
      /* Ukuran font tombol */
      text-decoration: none;
      /* Menghapus garis bawah */
      margin: 10px 0;
      /* Jarak vertikal antar tombol */
      padding: 10px 20px;
      /* Padding tombol */
      border: 2px solid white;
      /* Border putih */
      border-radius: 8px;
      /* Sudut tombol membulat */
      background-color: white;
      /* Latar belakang tombol putih */
      text-align: center;
      /* Teks tombol rata tengah */
      box-shadow: 0 4px 8px rgba(0, 123, 255, 0.4);
      /* Bayangan tombol */
      transition: all 0.3s ease;
      /* Transisi halus saat hover */
    }

    /* ==============================
    Kelas untuk Hover Tombol
    ============================== */
    .button:hover {
      color: white;
      /* Warna teks putih saat hover */
      background-color: #444444;
      /* Latar belakang tombol lebih terang */
      border: 2px solid white;
      /* Border tetap putih saat hover */
      box-shadow: 0 6px 12px rgba(0, 123, 255, 0.6);
      /* Bayangan lebih besar saat hover */
      transform: translateY(-3px);
      /* Efek tombol terangkat */
    }

    /* ==============================
    Kelas untuk Efek Tombol Aktif (Saat Diklik)
    ============================== */
    .button:active {
      transform: translateY(1px);
      /* Efek tombol menurun saat ditekan */
    }
  </style>
</head>

<body class="body">
  <div>
    <h2 class="h2-title">Pilih Bahasa</h2>
    <div class="button-container">
      <a href="./en" class="button">English</a>
      <a href="./id" class="button">Bahasa Indonesia</a>
    </div>
  </div>
</body>

</html>