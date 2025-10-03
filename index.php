<?php
session_start();
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Sistem Jual Beli Emas — Toko Tengko</title>
  <meta name="description" content="Platform jual beli emas online — beli, jual, dan simpan emas dengan aman. Cek harga realtime, histori transaksi, dan layanan penitipan.">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header role="banner">
    <div class="container">
      <a href="index.php" class="brand" aria-label="Beranda Sistem Jual Beli Emas">
        <h1>Sistem Jual Beli Emas</h1>
      </a>

      <nav role="navigation" aria-label="Navigasi utama">
        <ul>
          <li><a href="index.php#harga">Harga</a></li>
          <li><a href="index.php#produk">Produk</a></li>
          <li><a href="index.php#cara-kerja">Cara Kerja</a></li>
          <li><a href="index.php#testimoni">Testimoni</a></li>
          <li><a href="index.php#kontak">Kontak</a></li>
        </ul>
      </nav>

      <div class="auth">
        <?php if (isset($_SESSION['username'])): ?>
          <a href="dashboard.php">Dashboard</a> |
          <a href="logout.php">Logout</a>
        <?php else: ?>
          <a href="login.php">Masuk</a> |
          <a href="register.php">Daftar</a>
        <?php endif; ?>
      </div>
    </div>
  </header>

  <section id="hero" aria-labelledby="hero-heading">
    <div class="container">
      <div class="hero-content">
        <h2 id="hero-heading">Beli dan Jual Emas dengan Mudah & Aman</h2>
        <p>Cek harga emas realtime, beli per-gram, jual kembali kapan saja. Penyimpanan aman dan laporan transaksi otomatis.</p>
        <p>
          <?php if (!isset($_SESSION['username'])): ?>
            <a href="login.php" class="btn-primary">Mulai Sekarang</a>
          <?php else: ?>
            <a href="dashboard.php" class="btn-primary">Pergi ke Dashboard</a>
          <?php endif; ?>
          <a href="#cara-kerja" class="btn-secondary">Pelajari Cara Kerja</a>
        </p>
      </div>

      <aside aria-labelledby="harga-terbaru" id="harga" class="hero-aside">
        <h3 id="harga-terbaru">Harga Emas Hari Ini</h3>
        <p class="price">Rp 1.000.000 / gram</p>
        <small>Update terakhir: 14 Sep 2025, 20:00</small>
        <p><a href="index.php?view=market">Lihat grafik & histori</a></p>
      </aside>
    </div>
  </section>

  <main role="main">

    <section id="produk" aria-labelledby="produk-heading">
      <div class="container">
        <h2 id="produk-heading">Produk Emas</h2>
        <ul class="product-list">
          <li class="product-item" data-gram="1">
            <h3>Emas Batangan 1 gram</h3>
            <p class="harga-produk">Rp -</p>
            <a href="index.php?buy=1" class="btn-small">Beli</a>
          </li>

          <li class="product-item" data-gram="5">
            <h3>Emas Batangan 5 gram</h3>
            <p class="harga-produk">Rp -</p>
            <a href="index.php?buy=5" class="btn-small">Beli</a>
          </li>
        </ul>
      </div>
    </section>

    <section id="cara-kerja" aria-labelledby="cara-kerja-heading">
      <div class="container">
        <h2 id="cara-kerja-heading">Cara Kerja</h2>
        <ol class="steps">
          <li>Daftar akun dan verifikasi identitas.</li>
          <li>Cek harga realtime dan pilih produk/gram yang diinginkan.</li>
          <li>Bayar melalui transfer / e-wallet / kartu.</li>
          <li>Terima sertifikat digital & opsi penitipan fisik.</li>
        </ol>
      </div>
    </section>

    <section id="testimoni" aria-labelledby="testimoni-heading">
      <div class="container">
        <h2 id="testimoni-heading">Apa Kata Pelanggan</h2>
        <blockquote>
          <p>"Proses beli cepat, sertifikat langsung dikirim. Sangat terpercaya!"</p>
          <footer></footer>
        </blockquote>
      </div>
    </section>

  </main>

  <footer id="kontak" role="contentinfo">
    <div class="container">
      <section aria-labelledby="kontak-heading">
        <h2 id="kontak-heading">Hubungi Kami</h2>
        <address>
          <p>PT. Emas Tengko</p>
          <p>JL. Perjuangan No. 67, Samarinda</p>
          <p>Tel: 085248608133 | Email: sabirfajar@gmail.com</p>
        </address>
      </section>

      <nav aria-label="Footer navigation">
        <ul>
          <li><a href="index.php?view=terms">Ketentuan</a></li>
          <li><a href="index.php?view=privacy">Kebijakan Privasi</a></li>
          <li><a href="index.php?view=faq">FAQ</a></li>
        </ul>
      </nav>

      <small>&copy; 2025 Sistem Jual Beli Emas. Semua hak dilindungi.</small>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>