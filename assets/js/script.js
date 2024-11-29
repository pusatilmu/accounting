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

  // Mengubah bahasa ketika pengguna memilih opsi
  function changeLanguage(lang) {
    currentLang = lang;
    loadLanguage(lang);
  }

  // Memuat bahasa default (Inggris) pada awalnya
  loadLanguage(currentLang);
