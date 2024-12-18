<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KONTAK</title>
    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="uts.js"></script>
    <link rel="stylesheet" href="/css/kontak.css" />
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <p><b>MAKE A WISH</b></p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <!-- Menggunakan route() Laravel untuk tautan ke halaman utama -->
                            <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- Menggunakan route() Laravel untuk halaman kontak -->
                            <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <!-- Menggunakan route() Laravel untuk halaman login -->
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<!-- Product Section -->
<section id="products" class="container-fluid py-5 bg-custom">
    <h2 class="text-etalase mb-4"><b>INFORMASI TOKO</b></h2>
    <div class="row">
        <!-- Product Card 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="/image/toko.jpg" class="card-img-top" alt="Product 1" />
            </div>
        </div>
 
<!-- Kotak Deskripsi Produk -->
<div class="col-md-6 d-flex align-items-center">
    <div class="product-description-box p-4">
        <h2 class="product-title">Lokasi Toko</h2>
        <p class="product-description">
            Jalan. Legian Tengah No 427
        </p>
        <a class="product-price" href="https://maps.app.goo.gl/BsPe3UeBrK9GVBKB7">Klik Untuk Melihat Detail</a> 
        <h2 class="product-title">Social Media</h2>
        <p class="product-description">
            Instagram : @makeawishclothes
        </p>
        <a class="product-price" href="https://www.instagram.com/makeawishclothes?igsh=MWJ5MzZycDQ4bjE0Mw==">Klik Untuk Melihat Detail</a> 
        <h2 class="product-title">Nomor Telepon</h2>
        <p class="product-description">
            123-456-7890
        </p>
    </div>
</div>

</body>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Toko Baju. Make A Wish.</p>
    </footer>
    
</html>
