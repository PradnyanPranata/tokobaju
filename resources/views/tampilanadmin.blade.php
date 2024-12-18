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
                            <a class="nav-link" aria-current="page" href="{{ route('admin') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.transaksi') }}">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <!-- Menggunakan route() Laravel untuk halaman kontak -->
                            <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <!-- Form Logout dengan metode POST -->
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Product Section -->
    <section id="products" class="container-fluid py-5 bg-custom">
        <h2 class="text-rekomendasi mb-4"><b>PRODUCT MAKE A WISH</b></h2>
        <div class="row">
           <!-- Baris 1 -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/cardigan.png') }}" class="card-img-top" alt="Cardigan" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Cardigan</b></h5>
                        <p class="card-text">Harga: Rp150.000<a href="{{ route('editbarang1') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/outer.png') }}" class="card-img-top" alt="Corduroy Jacket" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Corduroy Jacket</b></h5>
                        <p class="card-text">Harga: Rp200.000<a href="{{ route('editbarang2') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/blazer.png') }}" class="card-img-top" alt="Blazer" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Blazer</b></h5>
                        <p class="card-text">Harga: Rp500.000<a href="{{ route('editbarang3') }}" class="see-more">Edit</a></p>
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
                        <p class="card-text">Harga: Rp200.000<a href="{{ route('editbarang4') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/workshirt.png') }}" class="card-img-top" alt="Work Shirt" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Work Shirt</b></h5>
                        <p class="card-text">Harga: Rp350.000<a href="{{ route('editbarang5') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/flannel.png') }}" class="card-img-top" alt="Flannel" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Flannel</b></h5>
                        <p class="card-text">Harga: Rp150.000<a href="{{ route('editbarang6') }}" class="see-more">Edit</a></p>
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
                        <p class="card-text">Harga: Rp300.000<a href="{{ route('editbarang7') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/sweater.png') }}" class="card-img-top" alt="Sweater" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Sweater</b></h5>
                        <p class="card-text">Harga: Rp200.000<a href="{{ route('editbarang8') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('image/vest.png') }}" class="card-img-top" alt="Vest" />
                    <div class="card-body">
                        <h5 class="card-title"><b>Vest</b></h5>
                        <p class="card-text">Harga: Rp250.000<a href="{{ route('editbarang9') }}" class="see-more">Edit</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Toko Baju. Make A Wish.</p>
    </footer>

    <!-- Bootstrap JS and Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</html>
