<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function buyProduct(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'size' => 'required|in:S,M,L,XL',
        'quantity' => 'required|integer|min:1',
        'payment_method' => 'required|in:ewallet_ovo,ewallet_gopay,ewallet_dana,transfer',
        // Validasi transfer_proof hanya jika metode pembayaran adalah transfer
        'transfer_proof' => $request->payment_method == 'transfer' ? 'nullable|image' : 'nullable',
    ]);

    // Ambil produk berdasarkan ID
    $product = Product::findOrFail($id);

    // Tentukan field stok berdasarkan ukuran
    $sizeField = 'stock_' . strtolower($request->size);
    
    // Periksa apakah stok mencukupi
    if ($product->$sizeField < $request->quantity) {
        return back()->with('error', 'Stok tidak mencukupi.');
    }

    // Kurangi stok produk
    $product->reduceStock(strtolower($request->size), $request->quantity);

    // Simpan bukti transfer jika ada
    $transferProofPath = null;
    if ($request->hasFile('transfer_proof')) {
        // Simpan bukti transfer di folder transfer_proofs di storage/public
        $transferProofPath = $request->file('transfer_proof')->store('transfer_proofs', 'public');
    }

    // Simpan transaksi ke database
    $product->transactions()->create([
        'user_id' => auth()->id(),
        'nama_pembeli' => auth()->user()->name,
        'quantity' => $request->quantity,
        'size' => $request->size,
        'payment_method' => $request->payment_method,
        'transfer_proof' => $transferProofPath, // Simpan path bukti transfer
    ]);

    return back()->with('success', 'Produk berhasil dibeli.');
}

}    
