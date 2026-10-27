<?php
// Langkah 1: panggil data usaha
require 'config.php';

// Langkah 2: buat link WhatsApp dari nomor di config.php
$linkWA = 'https://wa.me/' . $usaha['wa'];

// Langkah 3: tampilkan bagian atas halaman
include 'includes/header.php';
?>

<main>
  <div class="hero">
    <div class="wrap">
      <div>
        <h1>Cucian beres, waktumu tetap milikmu.</h1>
        <p><?= e($usaha['nama']) ?> membantu kamu mengurus cucian di <?= e($usaha['kota']) ?>, supaya baju kembali bersih, wangi, dan rapi tanpa ribet.</p>
        <a class="btn" href="<?= e($linkWA) ?>" target="_blank" rel="noopener">Pesan lewat WhatsApp</a>
      </div>
      <div class="porthole" role="img" aria-label="Ilustrasi jendela mesin cuci"></div>
    </div>
  </div>

  <section id="layanan">
    <div class="wrap">
      <h2>Layanan kami</h2>
      <p class="lead">Pilih layanan yang paling pas dengan kebutuhan cucianmu.</p>
      <div class="grid">
        <?php foreach ($layanan as $item): ?>
          <div class="item">
            <h3><?= e($item['judul']) ?></h3>
            <p><?= e($item['isi']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="cara-pesan" class="alt">
    <div class="wrap">
      <h2>Cara pesan</h2>
      <ol class="steps">
        <?php foreach ($langkah as $teks): ?>
          <li><?= e($teks) ?></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section id="kontak" class="contact">
    <div class="wrap">
      <h2>Kontak dan lokasi</h2>
      <dl>
        <dt>Alamat</dt><dd><?= e($usaha['alamat']) ?></dd>
        <dt>Jam operasional</dt><dd><?= e($usaha['jam']) ?></dd>
        <dt>WhatsApp</dt><dd><?= e($usaha['wa']) ?></dd>
      </dl>
      <a class="btn" href="<?= e($usaha['maps']) ?>" target="_blank" rel="noopener">Lihat di Google Maps</a>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
