<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="title">Financial Management Application</title>
</head>

<body>
  <h1 id="title">Financial Management Application</h1>
  <div>
    <button id="account_management">Account Management</button>
    <button id="category_management">Transaction Categories</button>
    <button id="transaction_details">Transaction Details</button>
  </div>

  <!-- Dropdown untuk memilih bahasa -->
  <select onchange="changeLanguage(this.value)">
    <option value="en">English</option>
    <option value="id">Bahasa Indonesia</option>
  </select>

  <div>
    <button id="save">Save</button>
    <button id="cancel">Cancel</button>
  </div>

  <script>
    let currentLang = 'en'; // Default language

    // Fungsi untuk memuat file JSON bahasa
    function loadLanguage(lang) {
      fetch(`./assets/lang/${lang}.json`)
        .then(response => response.json())
        .then(data => {
          document.getElementById('title').textContent = data.title;
          document.getElementById('account_management').textContent = data.account_management;
          document.getElementById('category_management').textContent = data.category_management;
          document.getElementById('transaction_details').textContent = data.transaction_details;
          document.getElementById('save').textContent = data.save;
          document.getElementById('cancel').textContent = data.cancel;
        });
    }

    // Fungsi untuk mengubah bahasa dan mengarahkan ke folder yang sesuai
    function changeLanguage(lang) {
      currentLang = lang;

      // Pindahkan pengguna ke folder sesuai bahasa yang dipilih
      if (lang === 'id') {
        window.location.href = './id'; // Redirect ke folder id (Bahasa Indonesia)
      } else if (lang === 'en') {
        window.location.href = './en'; // Redirect ke folder en (Bahasa Inggris)
      }

      // Memuat bahasa yang sesuai setelah redirect
      loadLanguage(lang);
    }

    // Memuat bahasa default (Inggris) pada awalnya
    loadLanguage(currentLang);
  </script>
</body>

</html>