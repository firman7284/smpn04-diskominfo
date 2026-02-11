<?php 
$page_title = "Galeri";
include_once __DIR__ . '/../includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero-section bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold">SMP Negeri 4 Semarang</h1>
                <p class="lead">Sekolah Unggul Berkarakter, Berprestasi, dan Berwawasan Lingkungan</p>
                <a href="profil.php" class="btn btn-light btn-lg mt-3">Kenali Kami Lebih Dekat</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/sekolah-utama.jpg" alt="Gedung SMPN 4 Semarang" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<div class="container py-4">
    <!-- Judul Halaman -->
    <div class="mb-4 text-center">
        <h1 class="display-5 fw-bold text-primary mb-2">GALERI</h1>
    </div>

    <!-- KONTEN UTAMA -->
    

            <!-- Daftar Item Galeri -->
            <div class="gallery-grid">
                <div class="gallery-item">
                    <div class="item-image">
                        <img src="../assets/images/galeri/Study Lingkungan Jakarta Bandung/sljb_galeri1.jpg" alt="Study Lingkungan Jakarta Bandung">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Study Lingkungan Jakarta Bandung</h3>
                        <p class="item-desc">Study Lingkungan Jakarta Bandung 26 Februari 2023</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="item-image">
                        <img src="../assets/images/galeri/Project P5 Eco Enzim/ppee_galeri8.jpg" alt="Project P5 Eco Enzim">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Project P5 Eco Enzim</h3>
                        <p class="item-desc">Project P5 membuat Eco Enzim</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="item-image">
                        <img src="../assets/images/galeri/Classmeeting/cs_galeri3.jpg" alt="Classmeeting">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Classmeeting</h3>
                        <p class="item-desc">Classmeeting</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="item-image">
                        <img src="../assets/images/galeri/Hari Pendidikan Nasional/hpn_galeri1.jpg" alt="Hari Pendidikan Nasional">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Hari Pendidikan Nasional</h3>
                        <p class="item-desc">Hari Pendidikan Nasional</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="item-image">
                        <img src="../assets/images/galeri/Hari Peduli Sampah Nasional/hpsn_galeri2.jpg" alt="Hari Peduli Sampah Nasional">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Hari Peduli Sampah Nasional</h3>
                        <p class="item-desc">Hari Peduli Sampah Nasional</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="item-image">
                        <img src="../assets/images/galeri/Vaksinasi Covid-19/vaksin_galeri3.jpg" alt="Vaksinasi Covid-19">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Vaksinasi Covid-19</h3>
                        <p class="item-desc">Vaksinasi Covid-19</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="item-image">
                        <img src="../assets/images/galeri/Dewan Galang SMPN 4 Semarang/dg_galeri2.jpg" alt="Dewan Galang SMPN 4 Semarang">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Dewan Galang SMPN 4 Semarang</h3>
                        <p class="item-desc">Dewan Galang SMPN 4 Semarang</p>
                    </div>
                </div>
            </div>


            <div class="text-center mt-5 pt-4 border-top">
                <p class="fs-5 text-muted mb-0">
                    Showing: <span class="fw-bold text-primary">7</span> kegiatan
                </p>
            </div>
        </div>
    </main>
</div>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>