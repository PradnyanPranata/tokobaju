<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Make a Wish</title>
    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Menggunakan asset() Laravel untuk file CSS -->
    <link rel="stylesheet" href="{{ asset('css/uts.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/uts.js') }}" />
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
                            <a class="nav-link" href="{{ route('login.form') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Gambar Atas -->
    <div class="gambar-atas">
        <!-- Menggunakan asset() Laravel untuk gambar -->
        <img src="{{ asset('image/latarbelakangfull.png') }}" alt="Gambar Atas" class="img-fluid"/>
    </div>

    <!-- Hero Section -->
    <section class="hero-text-center">
        <div class="container">
            <h1><b>SELAMAT DATANG DI TOKO KAMI</b></h1>
            <p>Tersedia berbagai macam pakaian
                 berkualitas dengan harga terbaik</p>
        </div>
    </section>

    <!-- Product Section -->
    <section id="products" class="container-fluid py-5 bg-custom">
        <h2 class="text-rekomendasi mb-4"><b>REKOMENDASI PRODUCT MAKE A WISH</b></h2>
        <!-- Baris 1 -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/cardigan.png') }}" class="card-img-top" alt="Cardigan" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Cardigan</b></h5>
                        <p class="card-text">Harga: Rp150.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/outer.png') }}" class="card-img-top" alt="Corduroy Jacket" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Corduroy Jacket</b></h5>
                        <p class="card-text">Harga: Rp200.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/blazer.png') }}" class="card-img-top" alt="Blazer" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Blazer</b></h5>
                        <p class="card-text">Harga: Rp500.000</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Baris 2 -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/hoodie.png') }}" class="card-img-top" alt="Hoodie" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Hoodie</b></h5>
                        <p class="card-text">Harga: Rp200.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/workshirt.png') }}" class="card-img-top" alt="Work Shirt" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Work Shirt</b></h5>
                        <p class="card-text">Harga: Rp350.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/flannel.png') }}" class="card-img-top" alt="Flannel" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Flannel</b></h5>
                        <p class="card-text">Harga: Rp150.000</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Baris 3 -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/dress.jpg') }}" class="card-img-top" alt="Dress" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Dress</b></h5>
                        <p class="card-text">Harga: Rp300.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/sweater.png') }}" class="card-img-top" alt="Sweater" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Sweater</b></h5>
                        <p class="card-text">Harga: Rp200.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/vest.png') }}" class="card-img-top" alt="Vest" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Vest</b></h5>
                        <p class="card-text">Harga: Rp250.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


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

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Toko Baju. Make A Wish.</p>
    </footer>

    <!-- Bootstrap JS and Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
