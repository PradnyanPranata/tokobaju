<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN</title>
    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="uts.js" />
    <link rel="stylesheet" href="/css/tampilanadmin.css" />
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
                            <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
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
        <h2 class="text-rekomendasi mb-4"><b>STOK PRODUCT MAKE A WISH</b></h2>
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="/image/cardigan.png" class="card-img-top" alt="Product 1" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Cardigan</b></h5>
                        <p class="card-text">Harga: Rp150.000<a href="{{ route('editbarang1') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="/image/outer.png" class="card-img-top" alt="Product 2" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Corduroy Jacket</b></h5>
                        <p class="card-text">Harga: Rp200.000<a href="{{ route('editbarang2') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="/image/blazer.png" class="card-img-top" alt="Product style="/>
                    <div class="card-body">
                        <h5 class="card-title"><b>Blazer</b></h5>
                        <p class="card-text">Harga: Rp500.000<a href="{{ route('editbarang3') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
<section id="products" class="container-fluid py-5 bg-custom">
    <div class="row">
        <!-- Product Card 4 -->
        <div class="col-md-4">
            <div class="card">
                <img src="/image/hoodie.png" class="card-img-top img-fluid" alt="Product 1" />
                <div class="card-body">
                    <h5 class="card-title"><b>Hoodie</b></h5>
                    <p class="card-text">Harga: Rp200.000<a href="{{ route('editbarang4') }}" class="see-more">Edit</a></p>
                </div>
            </div>
        </div>
        <!-- Product Card 5 -->
        <div class="col-md-4">
            <div class="card">
                <img src="/image/workshirt.png" class="card-img-top img-fluid" alt="Product 2" />
                <div class="card-body">
                    <h5 class="card-title"><b>Work Shirt</b></h5>
                    <p class="card-text">Harga: Rp350.000<a href="{{ route('editbarang5') }}" class="see-more">Edit</a></p>
                </div>
            </div>
        </div>
        <!-- Product Card 6 -->
        <div class="col-md-4">
            <div class="card">
                <img src="/image/flannel.png" class="card-img-top img-fluid" alt="Product 3" />
                <div class="card-body">
                    <h5 class="card-title"><b>Flannel</b></h5>
                    <p class="card-text">Harga: Rp150.000<a href="{{ route('editbarang6') }}" class="see-more">Edit</a></p>
                </div>
            </div>
        </div>
        <!-- Product Card 7 -->
        <div class="col-md-4">
            <div class="card">
                <img src="/image/dress.jpg" class="card-img-top img-fluid" alt="Product 3" />
                <div class="card-body">
                    <h5 class="card-title"><b>Dress</b></h5>
                    <p class="card-text">Harga: Rp300.000<a href="{{ route('editbarang7') }}" class="see-more">Edit</a></p>
                </div>
            </div>
        </div>



    <!-- Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Produk berhasil ditambahkan ke keranjang.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</body>
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Toko Baju. Make A Wish.</p>
    </footer>

    <!-- Bootstrap JS and Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</html>
