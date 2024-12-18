<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Make a Wish</title>
    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/detailbarang1.css" />
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <p class="text-white"><b>MAKE A WISH</b></p>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('uts') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('kontak') }}">Kontak</a>
                        </li>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-white">Logout</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Product Section -->
    <section id="products" class="container py-5">
        <h2 class="text-center mb-4"><b>DESKRIPSI PRODUCT MAKE A WISH</b></h2>
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-4">
                <div class="card">
                    <img src="/image/flannel.png" class="card-img-top" alt="Product Image" />
                </div>
            </div>

            <!-- Product Description and Purchase Form -->
            <div class="col-md-6">
                <div class="product-description-box p-4 shadow">
                    <h2 class="product-title">Flannel</h2>
                    <p>Tingkatkan koleksi pakaian kasual Anda dengan flannel shirt ini, menambah kehangatan dan gaya padapenampilan sehari-hari.</p>
                    <h3 class="product-price">Harga: <b>Rp150.000</b></h3>

                    <!-- Form Pembelian -->
                    <form action="{{ route('beli.produk', ['id' => 6]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Pilih Ukuran -->
                        <div class="mb-3">
                            <label for="size" class="form-label">Pilih Ukuran:</label>
                            <select name="size" id="size" class="form-select" required>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>

                        <!-- Jumlah Pembelian -->
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Jumlah:</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" required />
                        </div>

                         <!-- Pilih Metode Pembayaran -->
                         <div class="mb-3">
                            <label for="payment_method" class="form-label">Pilih Metode Pembayaran:</label>
                            <select name="payment_method" id="payment_method" class="form-select" required>
                                <option value="ewallet_ovo">OVO</option>
                                <option value="ewallet_gopay">GoPay</option>
                                <option value="ewallet_dana">Dana</option>
                                <option value="transfer">Transfer Bank : 1234567890 </option>
                            </select>
                        </div>
                        
                    
                        <!-- Input Bukti Transfer (hanya muncul jika Transfer Bank dipilih) -->
                        <div class="mb-3" id="transfer-proof-container" style="display: none;">
                            <label for="transfer_proof" class="form-label">Unggah Bukti Transfer:</label>
                            <input type="file" name="transfer_proof" id="transfer_proof" class="form-control" accept="image/*" />
                        </div>

                        <!-- Tambahkan File JavaScript -->
                        <script src="{{ asset('js/buktitf.js') }}"></script>

                        <!-- Tombol Beli -->
                        <button type="submit" class="btn btn-success">BELI</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-center text-white py-3">
        <p>&copy; 2024 Toko Baju. Make A Wish.</p>
    </footer>
</body>
</html>
