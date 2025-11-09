<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yayasan Seulanga Insan Mulia</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --primary-green: #7ed957;
      --green-dark: #5fb83b;
      --dark: #0a0a0a;
      --dark-secondary: #1a1a1a;
      --text-light: #e0e0e0;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: var(--dark);
      color: var(--text-light);
      overflow-x: hidden;
    }

    /* Navbar */
    nav {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      padding: 20px 0;
      transition: all 0.3s ease;
    }

    nav.scrolled {
      background: rgba(10, 10, 10, 0.95);
      backdrop-filter: blur(10px);
      padding: 15px 0;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
    }

    .nav-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 24px;
      font-weight: 800;
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-icon {
      width: 40px;
      height: 40px;
      background: linear-gradient(135deg, var(--primary-green), var(--green-dark));
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      color: var(--dark);
    }

    .nav-links {
      display: flex;
      gap: 40px;
      list-style: none;
    }

    .nav-links a {
      color: var(--text-light);
      text-decoration: none;
      font-weight: 500;
      position: relative;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--primary-green);
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary-green);
      transition: width 0.3s;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .login-btn {
      align-items: center;
      gap: 8px;
      padding: 12px 28px;
      background: linear-gradient(135deg, var(--primary-green), var(--green-dark));
      color: var(--dark);
      text-decoration: none;
      border-radius: 50px;
      font-weight: 700;
      font-size: 14px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(126, 217, 87, 0.3);
    }

    /* Hero Section */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
    }

    .hero::before {
      content: '';
      position: absolute;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(126, 217, 87, 0.15), transparent);
      border-radius: 50%;
      top: -200px;
      right: -200px;
      animation: float 8s ease-in-out infinite;
    }

    .hero::after {
      content: '';
      position: absolute;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(126, 217, 87, 0.1), transparent);
      border-radius: 50%;
      bottom: -100px;
      left: -100px;
      animation: float 6s ease-in-out infinite reverse;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0) rotate(0deg);
      }

      50% {
        transform: translateY(-30px) rotate(5deg);
      }
    }

    .hero-content {
      max-width: 1400px;
      padding: 0 40px;
      z-index: 1;
      text-align: center;
    }

    .hero-title {
      font-size: 80px;
      font-weight: 800;
      line-height: 1.1;
      margin-bottom: 30px;
      background: linear-gradient(135deg, #fff 0%, var(--primary-green) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: fadeInUp 1s ease;
    }

    .hero-subtitle {
      font-size: 24px;
      color: var(--text-light);
      margin-bottom: 50px;
      font-weight: 300;
      animation: fadeInUp 1s ease 0.2s backwards;
    }

    .hero-location {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 12px 24px;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 50px;
      margin-bottom: 50px;
      animation: fadeInUp 1s ease 0.3s backwards;
    }

    .cta-button {
      display: inline-block;
      padding: 18px 45px;
      background: linear-gradient(135deg, var(--primary-green), var(--green-dark));
      color: var(--dark);
      text-decoration: none;
      border-radius: 50px;
      font-weight: 700;
      font-size: 16px;
      transition: all 0.3s;
      box-shadow: 0 10px 40px rgba(126, 217, 87, 0.3);
      animation: fadeInUp 1s ease 0.4s backwards;
    }

    .cta-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 50px rgba(126, 217, 87, 0.4);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Section Styling */
    section {
      padding: 120px 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .section-header {
      text-align: center;
      margin-bottom: 80px;
    }

    .section-label {
      display: inline-block;
      padding: 8px 20px;
      background: rgba(126, 217, 87, 0.1);
      border: 1px solid rgba(126, 217, 87, 0.3);
      border-radius: 50px;
      color: var(--primary-green);
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .section-title {
      font-size: 56px;
      font-weight: 800;
      margin-bottom: 20px;
      background: linear-gradient(135deg, #fff 0%, var(--primary-green) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .section-description {
      font-size: 20px;
      color: rgba(255, 255, 255, 0.6);
      max-width: 700px;
      margin: 0 auto;
      line-height: 1.6;
    }

    /* Tentang Section */
    .tentang-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .tentang-content h3 {
      font-size: 32px;
      margin-bottom: 25px;
      color: white;
    }

    .tentang-content p {
      font-size: 18px;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 20px;
    }

    .tentang-image {
      position: relative;
      border-radius: 24px;
      overflow: hidden;
      height: 500px;
    }

    .tentang-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s;
    }

    .tentang-image:hover img {
      transform: scale(1.05);
    }

    .tentang-image::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(126, 217, 87, 0.3), transparent);
      z-index: 1;
    }

    /* Program Cards */
    .program-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
      margin-top: 60px;
    }

    .program-card {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 24px;
      padding: 40px;
      transition: all 0.4s;
      position: relative;
      overflow: hidden;
    }

    .program-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(126, 217, 87, 0.1), transparent);
      opacity: 0;
      transition: opacity 0.4s;
    }

    .program-card:hover {
      transform: translateY(-10px);
      border-color: var(--primary-green);
      box-shadow: 0 20px 60px rgba(126, 217, 87, 0.2);
    }

    .program-card:hover::before {
      opacity: 1;
    }

    .program-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, var(--primary-green), var(--green-dark));
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
      margin-bottom: 25px;
    }

    .program-card h3 {
      font-size: 24px;
      margin-bottom: 15px;
      color: white;
    }

    .program-card p {
      color: rgba(255, 255, 255, 0.7);
      line-height: 1.7;
      font-size: 16px;
    }

    /* Struktur Section */
    #struktur {
      background: linear-gradient(135deg, rgba(126, 217, 87, 0.05), transparent);
    }

    .struktur-container {
      max-width: 900px;
      margin: 0 auto;
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 24px;
      padding: 60px;
    }

    .struktur-head {
      text-align: center;
      margin-bottom: 40px;
      padding-bottom: 40px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .struktur-head h3 {
      font-size: 28px;
      color: white;
      margin-bottom: 10px;
    }

    .struktur-head .name {
      font-size: 36px;
      font-weight: 800;
      background: linear-gradient(135deg, var(--primary-green), var(--green-dark));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .struktur-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
    }

    .struktur-item {
      padding: 25px;
      background: rgba(255, 255, 255, 0.02);
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .struktur-item strong {
      color: var(--primary-green);
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .struktur-item span {
      color: white;
      font-size: 18px;
      font-weight: 600;
    }

    /* Galeri */
    .galeri-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    .galeri-item {
      position: relative;
      border-radius: 24px;
      overflow: hidden;
      height: 350px;
      cursor: pointer;
    }

    .galeri-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s;
    }

    .galeri-item:hover img {
      transform: scale(1.1);
    }

    .galeri-item::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), transparent);
      opacity: 0;
      transition: opacity 0.3s;
      z-index: 1;
    }

    .galeri-item:hover::before {
      opacity: 1;
    }

    /* Berita Cards */
    .berita-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
    }

    .berita-card {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 24px;
      overflow: hidden;
      transition: all 0.4s;
    }

    .berita-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .berita-image {
      height: 250px;
      overflow: hidden;
      position: relative;
    }

    .berita-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s;
    }

    .berita-card:hover .berita-image img {
      transform: scale(1.1);
    }

    .berita-content {
      padding: 30px;
    }

    .berita-content h3 {
      font-size: 22px;
      margin-bottom: 15px;
      color: white;
    }

    .berita-content p {
      color: rgba(255, 255, 255, 0.6);
      line-height: 1.7;
      margin-bottom: 25px;
    }

    .read-more {
      color: var(--primary-green);
      text-decoration: none;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: gap 0.3s;
    }

    .read-more:hover {
      gap: 15px;
    }

    /* Footer */
    footer {
      background: var(--dark-secondary);
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding: 60px 40px 30px;
      text-align: center;
    }

    .footer-content {
      max-width: 1400px;
      margin: 0 auto;
    }

    .footer-logo {
      font-size: 32px;
      font-weight: 800;
      margin-bottom: 20px;
      background: linear-gradient(135deg, #fff 0%, var(--primary-green) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .social-links {
      display: flex;
      gap: 20px;
      justify-content: center;
      margin: 30px 0;
    }

    .social-links a {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      transition: all 0.3s;
    }

    .social-links a:hover {
      background: var(--primary-green);
      color: var(--dark);
      transform: translateY(-5px);
    }

    .footer-copyright {
      margin-top: 30px;
      padding-top: 30px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: rgba(255, 255, 255, 0.5);
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .hero-title {
        font-size: 60px;
      }

      .section-title {
        font-size: 42px;
      }

      .program-grid,
      .galeri-grid,
      .berita-grid {
        grid-template-columns: 1fr;
      }

      .tentang-grid {
        grid-template-columns: 1fr;
      }

      .struktur-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .hero-title {
        font-size: 40px;
      }

      .hero-subtitle {
        font-size: 18px;
      }

      section {
        padding: 80px 20px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav id="navbar">
    <div class="nav-container">
      <a href="#" class="logo">
        <div class="logo-icon">S</div>
        Seulanga
      </a>
      <ul class="nav-links">
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#program">Program</a></li>
        <li><a href="#struktur">Struktur</a></li>
        <li><a href="#galeri">Galeri</a></li>
        <li><a href="#berita">Berita</a></li>
        <li><a href="login.html" class="login-btn"><span>🔐</span> Login</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-content">
      <h1 class="hero-title">Yayasan Seulanga<br>Insan Mulia</h1>
      <p class="hero-subtitle">Berkarya dan Berbagi untuk Masa Depan yang Lebih Baik</p>
      <div class="hero-location">
        <span>📍</span> Panggoi, Lhokseumawe
      </div>
      <br>
      <a href="#tentang" class="cta-button">Pelajari Lebih Lanjut</a>
    </div>
  </section>

  <!-- Tentang -->
  <section id="tentang">
    <div class="section-header">
      <span class="section-label">Tentang Kami</span>
      <h2 class="section-title">Dedikasi untuk Perubahan</h2>
      <p class="section-description">Memberdayakan masyarakat melalui pendidikan, sosial, dan keagamaan</p>
    </div>
    <div class="tentang-grid">
      <div class="tentang-content">
        <h3>Visi & Misi Kami</h3>
        <p>Yayasan Seulanga Insan Mulia berlokasi di Panggoi, Lhokseumawe. Kami berdedikasi untuk meningkatkan kualitas
          pendidikan, sosial, dan keagamaan masyarakat melalui program-program yang inovatif dan berkelanjutan.</p>
        <p>Dengan semangat hijau — simbol pertumbuhan dan harapan — kami terus berupaya menciptakan perubahan positif di
          lingkungan sekitar dan membangun generasi yang lebih baik.</p>
      </div>
      <div class="tentang-image">
        <img src="https://images.unsplash.com/photo-1581091215367-59ab6d1d50f1" alt="Tentang Kami">
      </div>
    </div>
  </section>

  <!-- Program -->
  <section id="program">
    <div class="section-header">
      <span class="section-label">Program Kami</span>
      <h2 class="section-title">Tiga Pilar Utama</h2>
      <p class="section-description">Program berkelanjutan untuk memberdayakan masyarakat</p>
    </div>
    <div class="program-grid">
      <div class="program-card">
        <div class="program-icon">📚</div>
        <h3>Pendidikan</h3>
        <p>Menyelenggarakan kegiatan pendidikan formal dan non-formal untuk memberdayakan generasi muda dengan ilmu dan
          keterampilan yang relevan.</p>
      </div>
      <div class="program-card">
        <div class="program-icon">🤝</div>
        <h3>Sosial & Kemanusiaan</h3>
        <p>Menyalurkan bantuan kepada masyarakat yang membutuhkan, terutama dalam situasi darurat dan bencana untuk
          meringankan beban mereka.</p>
      </div>
      <div class="program-card">
        <div class="program-icon">🕌</div>
        <h3>Keagamaan</h3>
        <p>Mendorong pembinaan rohani dan kegiatan dakwah untuk memperkuat nilai spiritual masyarakat dan membangun
          karakter yang baik.</p>
      </div>
    </div>
  </section>

  <!-- Struktur -->
  <section id="struktur">
    <div class="section-header">
      <span class="section-label">Struktur Organisasi</span>
      <h2 class="section-title">Tim Kami</h2>
      <p class="section-description">Dipimpin oleh individu berpengalaman dan berdedikasi</p>
    </div>
    <div class="struktur-container">
      <div class="struktur-head">
        <h3>Ketua Yayasan</h3>
        <div class="name">Drs. Abdullah Syam</div>
      </div>
      <div class="struktur-grid">
        <div class="struktur-item">
          <strong>Wakil Ketua</strong>
          <span>Nur Aini, S.Pd</span>
        </div>
        <div class="struktur-item">
          <strong>Sekretaris</strong>
          <span>M. Fadli</span>
        </div>
        <div class="struktur-item">
          <strong>Bendahara</strong>
          <span>Rina Damayanti</span>
        </div>
        <div class="struktur-item">
          <strong>Bidang</strong>
          <span>Pendidikan, Sosial & Keagamaan</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Galeri -->
  <section id="galeri">
    <div class="section-header">
      <span class="section-label">Galeri</span>
      <h2 class="section-title">Momen Berharga</h2>
      <p class="section-description">Dokumentasi kegiatan dan program kami</p>
    </div>
    <div class="galeri-grid">
      <div class="galeri-item">
        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350" alt="Galeri 1">
      </div>
      <div class="galeri-item">
        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7" alt="Galeri 2">
      </div>
      <div class="galeri-item">
        <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433" alt="Galeri 3">
      </div>
    </div>
  </section>

  <!-- Berita -->
  <section id="berita">
    <div class="section-header">
      <span class="section-label">Berita & Update</span>
      <h2 class="section-title">Kabar Terbaru</h2>
      <p class="section-description">Informasi terkini tentang kegiatan kami</p>
    </div>
    <div class="berita-grid">
      <div class="berita-card">
        <div class="berita-image">
          <img src="https://images.unsplash.com/photo-1600880292089-90e7e086ee0c" alt="Berita 1">
        </div>
        <div class="berita-content">
          <h3>Program Pendidikan Ramah Anak</h3>
          <p>Yayasan Seulanga mengadakan kegiatan edukatif untuk anak-anak di Panggoi.</p>
          <a href="#" class="read-more">Baca Selengkapnya →</a>
        </div>
      </div>
      <div class="berita-card">
        <div class="berita-image">
          <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad" alt="Berita 2">
        </div>
        <div class="berita-content">
          <h3>Kegiatan Sosial Ramadan</h3>
          <p>Menyalurkan bantuan kepada masyarakat kurang mampu selama bulan suci Ramadan.</p>
          <a href="#" class="read-more">Baca Selengkapnya →</a>
        </div>
      </div>
      <div class="berita-card">
        <div class="berita-image">
          <img src="https://images.unsplash.com/photo-1600086827872-4e4d80a1f3e5" alt="Berita 3">
        </div>
        <div class="berita-content">
          <h3>Pelatihan Guru</h3>
          <p>Pelatihan peningkatan kompetensi guru untuk pendidikan berkualitas.</p>
          <a href="#" class="read-more">Baca Selengkapnya →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-logo">Yayasan Seulanga</div>
      <p>Panggoi, Lhokseumawe</p>
      <div class="social-links">
        <a href="#">f</a>
        <a href="#">📷</a>
        <a href="#">▶</a>
      </div>
      <div class="footer-copyright">
        &copy; 2025 Yayasan Seulanga Insan Mulia. All rights reserved.
      </div>
    </div>
  </footer>

  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  </script>
</body>

</html>