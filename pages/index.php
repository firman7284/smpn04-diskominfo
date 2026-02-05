<?php 
$page_title = "Beranda";
include_once __DIR__ . '/../includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero-section bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold">Selamat Datang di SMP Negeri 4 Semarang</h1>
                <p class="lead">Sekolah Unggul Berkarakter, Berprestasi, dan Berwawasan Lingkungan</p>
                <a href="profil.php" class="btn btn-light btn-lg mt-3">Kenali Kami Lebih Dekat</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/sekolah-utama.jpg" alt="Gedung SMPN 4 Semarang" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Pengumuman Penting -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5"><i class="fas fa-bullhorn text-warning me-2"></i>Pengumuman Penting</h2>
        
        <div class="row">
            <!-- Kartu Pengumuman 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-warning shadow">
                    <div class="card-body">
                        <h5 class="card-title text-danger">
                            <i class="fas fa-exclamation-circle"></i> Pengumuman Kelulusan
                        </h5>
                        <p class="card-text">Informasi kelulusan siswa kelas IX Tahun Pelajaran 2023/2024.</p>
                        <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                    <div class="card-footer text-muted">
                        Diperbarui: 1 Juni 2024
                    </div>
                </div>
            </div>
            
            <!-- Kartu Pengumuman 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-info shadow">
                    <div class="card-body">
                        <h5 class="card-title text-info">
                            <i class="fas fa-user-graduate"></i> PPDB 2024/2025
                        </h5>
                        <p class="card-text">Penerimaan Peserta Didik Baru Tahun Pelajaran 2024/2025 telah dibuka.</p>
                        <a href="#" class="btn btn-outline-info">Daftar Sekarang</a>
                    </div>
                    <div class="card-footer text-muted">
                        Pendaftaran: 1-30 Juni 2024
                    </div>
                </div>
            </div>
            
            <!-- Kartu Pengumuman 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-success shadow">
                    <div class="card-body">
                        <h5 class="card-title text-success">
                            <i class="fas fa-calendar-alt"></i> Kalender Akademik
                        </h5>
                        <p class="card-text">Jadwal kegiatan akademik semester ganjil 2024/2025.</p>
                        <a href="#" class="btn btn-outline-success">Download</a>
                    </div>
                    <div class="card-footer text-muted">
                        Berlaku: Juli - Desember 2024
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sambutan Kepala Sekolah -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center mb-4 mb-lg-0">
                <img src="assets/images/kepala-sekolah.jpg" alt="Kepala Sekolah" class="img-fluid rounded-circle border border-5 border-white shadow" width="200">
                <h5 class="mt-3">Supanggih, S.Pd., M.M</h5>
                <p class="text-muted">Kepala Sekolah</p>
            </div>
            <div class="col-lg-9">
                <h2 class="mb-4">Sambutan Kepala Sekolah</h2>
                <blockquote class="blockquote">
                    <p class="mb-4">"Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                    <p>Pertama-tama kami panjatkan puji syukur atas limpahan rahmat-Nya, sehingga situs web ini dapat kami hadirkan untuk masyarakat. Situs web ini sebagai wujud komitmen kami dalam memberikan informasi seluas-luasnya kepada masyarakat."</p>
                    <footer class="blockquote-footer mt-3">Supanggih, S.Pd., M.M</footer>
                </blockquote>
                <a href="profil.php#sambutan" class="btn btn-primary mt-3">Baca Sambutan Lengkap</a>
            </div>
        </div>
    </div>
</section>

<!-- Galeri Video -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5"><i class="fas fa-video text-danger me-2"></i>Galeri Video</h2>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" title="Video Profil Sekolah" allowfullscreen class="rounded shadow"></iframe>
                </div>
                <p class="mt-2 fw-bold">Profil SMP Negeri 4 Semarang</p>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" title="Kegiatan Siswa" allowfullscreen class="rounded shadow"></iframe>
                </div>
                <p class="mt-2 fw-bold">Kegiatan Ekstrakurikuler 2024</p>
            </div>
        </div>
    </div>
</section>



<?php include_once __DIR__ . '/../includes/footer.php'; ?>