<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Admin</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Transaksi</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pembeli</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Ukuran</th>
                    <th>Metode Pembayaran</th>
                    <th>Bukti Transfer</th>
                    <th>Tanggal Transaksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $index => $transaction)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $transaction->nama_pembeli }}</td>
                        <td>{{ $transaction->product->nama ?? 'Produk tidak tersedia' }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>{{ $transaction->size }}</td>
                        <td>{{ $transaction->payment_method }}</td>
                        <td>
                            @if ($transaction->transfer_proof)
                                <a href="{{ asset('storage/' . $transaction->transfer_proof) }}" target="_blank">Lihat Bukti</a>
                            @else
                                Tidak Ada
                            @endif
                        </td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
