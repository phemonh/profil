<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Saya</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php 
include "navbar.php";
?>

<?php
$nama    = "Kasum";
$umur    = "37";
$sekolah = "Guru Informatika";
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="card-title mb-3">Profil Singkat</h3>

                    <!-- Penjelasan Halaman -->
                    <p class="text-muted mb-4">
                        Halaman ini merupakan bagian dari website pembelajaran
                        <strong>Ekstrakurikuler Coding</strong>
                        di <strong>MTs Negeri 1 Banjarnegara</strong>.
                        Website ini digunakan sebagai media belajar, latihan, dan pengenalan dunia pemrograman
                        bagi peserta didik.
                    </p>

                    <p class="fs-5">Halo, nama saya <strong><?= $nama ?></strong></p>
                    <p class="fs-5">Umur saya <strong><?= $umur ?> tahun</strong></p>
                    <p class="fs-5">Saya seorang <strong><?= $sekolah ?></strong></p>

                    <a href="profil.php" class="btn btn-primary mt-3">
                        Masuk ke Profil Saya
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
