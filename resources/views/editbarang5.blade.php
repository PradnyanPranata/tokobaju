<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAMBAH STOK</title>
    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="uts.js"></script>
    <link rel="stylesheet" href="/css/editbarang2.css" />
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <p><b>MAKE A WISH - ADMIN</b></p>
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
    <h2 class="text-etalase mb-4"><b>TAMBAH  PRODUCT MAKE A WISH</b></h2>
    <div class="row">
        <!-- Product Card 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="/image/workshirt.png" class="card-img-top" alt="Product 1" />
            </div>
        </div>

<!-- Kotak Deskripsi Produk -->
<div class="col-md-6 d-flex align-items-center">
    <div class="product-description-box p-4">
    <form>
        <h2 class="product-title">Work Shirt</h2>
        <div class="mb-3">
            <label for="Stok" class="form-label">Total Stok S</label>
            <input type="text" class="form-control" id="username" placeholder="" value="20" required />
        </div>
        <div class="mb-3">
            <label for="Stok" class="form-label">Total Stok M</label>
            <input type="text" class="form-control" id="password" placeholder="" value="30" required />
        </div>
        <div class="mb-3">
            <label for="Stok" class="form-label">Total Stok L</label>
            <input type="text" class="form-control" id="username" placeholder="" value="40" required />
        </div>
        <div class="mb-3">
            <label for="Stok" class="form-label">Total Stok XL</label>
            <input type="text" class="form-control" id="password" placeholder="" value="50" required />
        </div>
    </form>
    </div>
</div>

</body>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Toko Baju. Make A Wish.</p>
    </footer>
    
</html>
