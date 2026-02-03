<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0f0f0f; /* hitam */
            color: #f5f5dc; /* cream */
            font-family: 'Segoe UI', sans-serif;
        }

        .profile-card {
            background-color: #1a1a1a;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(245, 245, 220, 0.2);
        }

        .profile-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #f5f5dc;
        }

        .badge-skill {
            background-color: #f5f5dc;
            color: #0f0f0f;
            font-size: 14px;
        }
    </style>
</head>
<body> 

<?php 
include "navbar.php";
?>

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="col-md-6">
        <div class="profile-card p-4 text-center">

            <!-- Foto Profil (opsional) -->
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
                 alt="Foto Profil"
                 class="profile-img mb-3">

            <h2 class="fw-bold">Profil Siswa</h2>
            <p class="text-secondary">MTs Negeri 1 Banjarnegara</p>

            <hr class="text-light">

            <div class="text-start">
                <p><strong>Nama:</strong> Siswa Kelas 7A</p>
                <p><strong>Kelas:</strong> 7A</p>
                <p><strong>Umur:</strong> 12 Tahun</p>
                <p><strong>Sekolah:</strong> MTs Negeri 1 Banjarnegara</p>
                <p><strong>Hobi:</strong> Coding</p>
                <p><strong>Tentang Saya:</strong><br>
                   Saya adalah siswa kelas 7A yang menyukai dunia coding. 
                   Saat ini saya sedang belajar dasar-dasar coding dan ingin 
                   menjadi programmer yang hebat di masa depan.
                </p>
            </div>

            <div class="mt-3">
                <span class="badge badge-skill me-2">HTML</span>
                <span class="badge badge-skill me-2">CSS</span>
                <span class="badge badge-skill">Belajar Coding</span>
            </div>

            <button class="btn btn-outline-light mt-4 px-4">
                Semangat Belajar 🚀
            </button>

        </div>
    </div>
</div>

</body>
</html>
