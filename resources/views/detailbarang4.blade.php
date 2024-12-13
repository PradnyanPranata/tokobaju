<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Make a Wish</title>
    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="uts.js"></script>
    <link rel="stylesheet" href="/css/detailbarang4.css" />
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
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
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
    <h2 class="text-etalase mb-4"><b>DESKRIPSI PRODUCT MAKE A WISH</b></h2>
    <div class="row">
        <!-- Product Card 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="/image/hoodie.png" class="card-img-top" alt="Product 4" />
            </div>
        </div>

<!-- Kotak Deskripsi Produk -->
<div class="col-md-6 d-flex align-items-center">
    <div class="product-description-box p-4">
        <h2 class="product-title">Hoodie</h2>
        <p class="product-description">
            Temukan kombinasi sempurna antara kenyamanan dan gaya dengan hoodie ini! Didesain untuk memberi Anda kehangatan dan keleluasaan,
            hoodie ini adalah pilihan ideal untuk aktivitas santai, olahraga, atau sekadar bersantai di rumah.
        </p>
        <h3 class="product-price">Harga: Rp200.000</h3>
        
        <!-- Pilihan Ukuran -->
        <div class="product-sizes mt-3">
            <label for="sizeSelect" class="form-label">Pilih Ukuran:</label>
            <select id="sizeSelect" class="form-select">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
        </div>

        <!-- Pilihan Jumlah (Hanya Tampilan) -->
        <div class="product-quantity mt-3">
            <label class="form-label">Jumlah:</label>
            <div class="quantity-controls">
                <button class="btn btn-secondary btn-sm" disabled>-</button>
                <input type="text" value="1" readonly />
                <button class="btn btn-secondary btn-sm" disabled>+</button>
            </div>
        </div>

        <!-- Subtotal (Teks Statis) -->
        <div class="product-subtotal mt-3">
            <h4>Subtotal: <span>Rp200.000</span></h4>
        </div>

        <!-- Tombol Aksi -->
        <div class="product-buttons mt-3">
            <button class="btn btn-primary btn-add-to-cart">TAMBAHKAN KE KERANJANG</button>
            <button class="btn btn-success btn-buy-now">BELI</button>
        </div>
    </div>
</div>
</body>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Toko Baju. Make A Wish.</p>
    </footer>

</html>
