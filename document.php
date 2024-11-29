<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tahapan Penggunaan Aplikasi Akuntansi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f4f4f4;
    }

    h1,
    h2 {
      color: #333;
    }

    h3 {
      color: #007BFF;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    ul {
      line-height: 1.8;
    }

    code {
      background-color: #f8f9fa;
      padding: 5px;
      font-size: 1rem;
      border-radius: 3px;
      color: #d63384;
    }

    .highlight {
      background-color: #d1ecf1;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Tahapan Penggunaan Aplikasi Akuntansi</h1>

    <div class="content">
      <h2>1. Login ke Aplikasi</h2>
      <p>Langkah pertama adalah masuk ke aplikasi menggunakan kredensial akun pengguna. Anda akan diminta untuk memasukkan username dan password. Setelah berhasil login, Anda akan diarahkan ke halaman utama aplikasi.</p>
      <ul>
        <li>Masukkan username dan password.</li>
        <li>Tekan tombol <strong>Login</strong> untuk mengakses aplikasi.</li>
        <li>Jika login berhasil, Anda akan diarahkan ke halaman beranda.</li>
      </ul>
    </div>

    <div class="content">
      <h2>2. Menambahkan Transaksi Baru</h2>
      <h3>Langkah 1: Akses Formulir Transaksi</h3>
      <p>Pada halaman utama aplikasi, pilih menu <strong>Tambah Transaksi</strong> untuk membuka formulir pencatatan transaksi baru.</p>
      <ul>
        <li>Masukkan <strong>tanggal transaksi</> (misalnya: 2024-11-01).</li>
        <li>Masukkan <strong>deskripsi transaksi</strong> (misalnya: "Penjualan barang secara tunai").</li>
        <li>Masukkan <strong>total transaksi</strong> (misalnya: 1000).</li>
        <li>Pilih akun yang terlibat dalam transaksi, misalnya <code>Cash (Asset)</code> untuk transaksi penjualan tunai.</li>
        <li>Pilih jenis transaksi, apakah <strong>Debit</strong> atau <strong>Credit</strong>.</li>
      </ul>

      <h3>Langkah 2: Menyimpan Transaksi</h3>
      <p>Setelah mengisi semua data transaksi, tekan tombol <strong>Simpan Transaksi</strong>. Transaksi baru akan disimpan di sistem dan dapat dilihat pada daftar transaksi.</p>
      <div class="highlight">
        <code>Contoh Transaksi: Penjualan barang secara tunai sebesar 1000, Debit Cash, Credit Sales Revenue.</code>
      </div>
    </div>

    <div class="content">
      <h2>3. Melihat Daftar Transaksi</h2>
      <p>Setelah transaksi berhasil disimpan, Anda dapat melihat daftar transaksi yang telah dimasukkan pada halaman <strong>Daftar Transaksi</strong>.</p>
      <ul>
        <li>Daftar transaksi akan menampilkan informasi seperti tanggal transaksi, deskripsi, akun yang terlibat, dan total transaksi.</li>
        <li>Anda dapat mengurutkan atau memfilter transaksi berdasarkan kategori tertentu (misalnya, berdasarkan <code>Revenue</code>, <code>Expense</code>, dll).</li>
        <li>Anda juga dapat mengedit atau menghapus transaksi jika terjadi kesalahan.</li>
      </ul>
    </div>

    <div class="content">
      <h2>4. Menambahkan Kategori Transaksi</h2>
      <h3>Langkah 1: Akses Menu Kategori</h3>
      <p>Jika perlu mengelompokkan transaksi berdasarkan kategori, pilih menu <strong>Manajemen Kategori</strong> untuk menambahkan kategori transaksi baru.</p>
      <ul>
        <li>Masukkan <strong>nama kategori</strong> (misalnya: "Penjualan", "Pembelian", "Biaya").</li>
        <li>Tekan tombol <strong>Tambah Kategori</strong> untuk menyimpan kategori baru.</li>
      </ul>

      <h3>Langkah 2: Menghubungkan Kategori ke Transaksi</h3>
      <p>Setiap transaksi yang Anda tambahkan dapat dihubungkan dengan kategori yang relevan. Pilih kategori yang sesuai saat memasukkan transaksi pada formulir transaksi.</p>
      <div class="highlight">
        <code>Contoh: Kategori "Penjualan" untuk transaksi yang berhubungan dengan penjualan barang.</code>
      </div>
    </div>

    <div class="content">
      <h2>5. Melihat Laporan Keuangan</h2>
      <h3>Langkah 1: Akses Laporan Keuangan</h3>
      <p>Setelah beberapa transaksi dicatat, Anda bisa menghasilkan laporan keuangan untuk menganalisis kinerja keuangan perusahaan. Pilih menu <strong>Laporan Keuangan</strong> untuk melihat laporan keuangan seperti <strong>Neraca</strong> dan <strong>Laba Rugi</strong>.</p>
      <ul>
        <li>Pilih periode waktu laporan (misalnya: bulan atau tahun tertentu).</li>
        <li>Pilih jenis laporan yang ingin ditampilkan, seperti <strong>laba rugi</strong>, <strong>neraca</strong>, atau laporan transaksi lainnya.</li>
        <li>Tekan tombol <strong>Generate Laporan</strong> untuk menghasilkan laporan.</li>
      </ul>

      <h3>Langkah 2: Memahami Laporan Keuangan</h3>
      <p>Laporan yang dihasilkan akan menampilkan informasi berikut:</p>
      <ul>
        <li><strong>Neraca</strong>: Menampilkan total aset, kewajiban, dan ekuitas perusahaan.</li>
        <li><strong>Laba Rugi</strong>: Menampilkan pendapatan dan biaya yang terkait dengan transaksi selama periode tertentu.</li>
      </ul>
      <div class="highlight">
        <code>Contoh laporan laba rugi: Total pendapatan, total biaya, dan laba bersih.</code>
      </div>
    </div>

    <div class="content">
      <h2>6. Mengelola Pengguna dan Hak Akses</h2>
      <h3>Langkah 1: Akses Pengaturan Pengguna</h3>
      <p>Jika Anda adalah admin aplikasi, Anda dapat mengelola pengguna dan hak akses pada menu <strong>Pengaturan Pengguna</strong>.</p>
      <ul>
        <li>Tambah pengguna baru dengan memasukkan nama, email, dan hak akses (misalnya: Admin, User, Manager).</li>
        <li>Atur hak akses pengguna sesuai dengan kebutuhan. Sebagai contoh, pengguna dengan hak akses <strong>Admin</strong> dapat mengelola transaksi dan laporan, sedangkan pengguna <strong>User</strong> hanya bisa melihat laporan.</li>
      </ul>
    </div>

    <div class="content">
      <h2>7. Log Aktivitas Pengguna</h2>
      <p>Aplikasi ini juga mencatat semua aktivitas pengguna, seperti saat transaksi ditambahkan, diubah, atau dihapus. Anda bisa melihat log aktivitas ini untuk memantau tindakan pengguna dalam aplikasi.</p>
      <ul>
        <li>Akses menu <strong>Log Aktivitas</strong> untuk melihat riwayat aktivitas pengguna.</li>
        <li>Log aktivitas dapat mencakup informasi tentang pengguna, waktu aksi, dan tindakan yang diambil (misalnya, <strong>Tambah Transaksi</strong>, <strong>Edit Transaksi</strong>, dll).</li>
      </ul>
    </div>

    <div class="content">
      <h2>8. Logout dari Aplikasi</h2>
      <p>Setelah selesai menggunakan aplikasi, pastikan untuk keluar dengan memilih tombol <strong>Logout</strong> di sudut kanan atas aplikasi untuk menjaga keamanan akun Anda.</p>
    </div>

  </div>

</body>

</html>