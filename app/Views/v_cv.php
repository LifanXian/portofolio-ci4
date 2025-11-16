<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - <?php echo $biodata['nama_lengkap'] ?? 'Muhamad Ifan Fahrian'; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts (Inter) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* CSS Anda masih sama persis, tidak perlu diubah */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            padding-top: 70px; 
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 100px 0;
            border-radius: 0 0 30px 30px;
        }
        .hero-section h1 {
            font-weight: 700;
            font-size: 3.5rem;
        }
        .section-title {
            font-weight: 700;
            color: #343a40;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 10px;
        }
        .section-title::after {
            content: '';
            position: absolute;
            display: block;
            width: 60px;
            height: 4px;
            background: #007bff;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        .skill-badge {
            font-size: 1rem;
            padding: 0.6em 1em;
            margin: 5px;
        }
        .project-card, .education-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .project-card:hover, .education-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .project-card .card-img-top {
            aspect-ratio: 16 / 10;
            object-fit: cover;
        }
        .footer {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>

    <!-- 1. Navigasi Bar (Sticky) -->
    <!-- Navigasi sekarang mengarah ke ID Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home"><?php echo $biodata['nama_lengkap']; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Pengalaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Keahlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Hero Section (Home / CV) -->
    <!-- Data diambil dari $biodata -->
    <header id="home" class="hero-section text-center">
        <div class="container">
            <img src="<?php echo $biodata['foto_profil']; ?>" class="rounded-circle mb-4 border border-5 border-white shadow" alt="Foto Profil">
            <h1 class="display-4"><?php echo $biodata['nama_lengkap']; ?></h1>
            <p class="lead fs-4 mb-4"><?php echo $biodata['jabatan']; ?></p>
            <p class="fs-5 mb-4 container" style="max-width: 700px;"><?php echo $biodata['deskripsi_singkat']; ?></p>
            
            <a href="#experience" class="btn btn-light btn-lg rounded-pill px-4">Lihat Proyek</a>
            <a href="<?php echo base_url($biodata['file_cv']); ?>" class="btn btn-outline-light btn-lg rounded-pill px-4 ms-2" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-download me-2"></i>Download CV
            </a>
        </div>
    </header>

    <!-- 3. Riwayat Pendidikan -->
    <section id="education" class="py-5 my-5">
        <div class="container">
            <h2 class="text-center section-title">Riwayat Pendidikan</h2>
            <div class="row g-4 justify-content-center">
                <!-- Data diambil dari $pendidikan -->
                <?php foreach ($pendidikan as $edu) : ?>
                <div class="col-lg-6 col-md-8">
                    <div class="card education-card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold text-primary"><?php echo $edu['institusi']; ?></h5>
                            <p class="card-subtitle mb-2 text-muted">
                                <?php echo $edu['jenjang']; ?> - <?php echo $edu['jurusan']; ?>
                            </p>
                            <p class="card-text fw-light">
                                <?php echo $edu['tahun_mulai']; ?> - <?php echo ($edu['tahun_selesai'] == '0000' || $edu['tahun_selesai'] == null) ? 'Sekarang' : $edu['tahun_selesai']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4. Riwayat Pengalaman (Proyek) -->
    <section id="experience" class="py-5 my-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Pengalaman & Proyek</h2>
            <div class="row g-4">
                <!-- Data diambil dari $pengalaman -->
                <?php foreach ($pengalaman as $exp) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 project-card">
                        <!-- Gambar placeholder berdasarkan kategori -->
                        <?php
                            $imgUrl = 'https://placehold.co/600x400/adb5bd/white?text=Proyek';
                            if ($exp['kategori'] == 'Proyek' && strpos($exp['posisi'], 'Lua') !== false) {
                                $imgUrl = 'https://placehold.co/600x400/3498db/white?text=Script+Lua';
                            } else if ($exp['kategori'] == 'Proyek' && strpos($exp['posisi'], 'PHP') !== false) {
                                $imgUrl = 'https://placehold.co/600x400/e74c3c/white?text=Website+PHP';
                            } else if ($exp['kategori'] == 'Proyek' && strpos($exp['posisi'], 'Model') !== false) {
                                $imgUrl = 'https://placehold.co/600x400/f1c40f/white?text=3D+Model';
                            }
                        ?>
                        <img src="<?php echo $imgUrl; ?>" class="card-img-top" alt="<?php echo $exp['posisi']; ?>">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2"><?php echo $exp['kategori']; ?></span>
                            <h5 class="card-title fw-bold"><?php echo $exp['posisi']; ?></h5>
                            <p class="card-text"><?php echo $exp['deskripsi']; ?></p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. Keahlian (Skills) -->
    <section id="skills" class="py-5 my-5">
        <div class="container text-center">
            <h2 class="section-title">Keahlian Saya</h2>
            <div class="d-flex flex-wrap justify-content-center">
                <!-- Data diambil dari $keahlian -->
                <?php foreach ($keahlian as $skill) : ?>
                <span class="badge bg-primary rounded-pill skill-badge shadow-sm">
                    <?php echo $skill['nama_keahlian']; ?>
                </span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. Kontak -->
    <section id="contact" class="py-5 my-5 bg-light">
        <div class="container text-center">
            <h2 class="section-title">Hubungi Saya</h2>
            <p class="lead mb-4">Saya tertarik untuk berkolaborasi atau mendengar peluang baru. <br> Silakan hubungi saya melalui platform di bawah ini.</p>
            <div class="d-flex justify-content-center fs-1">
                <a href="<?php echo $biodata['linkedin']; ?>" class="text-dark mx-3"><i class="bi bi-linkedin"></i></a>
                <a href="<?php echo $biodata['github']; ?>" class="text-dark mx-3"><i class="bi bi-github"></i></a>
                <a href="mailto:<?php echo $biodata['email']; ?>" class="text-dark mx-3"><i class="bi bi-envelope-fill"></i></a>
            </div>
        </div>
    </section>

    <!-- 7. Footer -->
    <footer class="footer py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <span id="current-year"></span> - <?php echo $biodata['nama_lengkap']; ?>. Dibuat dengan Bootstrap & CodeIgniter 4.</p>
        </div>
    </footer>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // SCRIPT SEKARANG JAUH LEBIH SEDERHANA
        // Tidak perlu filter proyek, karena semua data sudah dimuat oleh PHP.

        // Event listener untuk scroll-spy (mengaktifkan link navigasi)
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id], header[id]');

        window.addEventListener('scroll', () => {
            let current = 'home'; // Default ke 'home'
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 100) { // 100px offset
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                // Perbarui cara pengecekan href
                const cleanHref = link.href.split('#')[1];
                if (cleanHref === current) {
                    link.classList.add('active');
                }
            });
        });


        // DOMContentLoaded: Dijalankan ketika halaman selesai dimuat
        document.addEventListener('DOMContentLoaded', () => {
            // Set tahun di footer
            document.getElementById('current-year').textContent = new Date().getFullYear();
        });
    </script>

</body>
</html>