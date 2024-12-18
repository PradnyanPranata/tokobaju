<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan halaman edit produk berdasarkan ID
    public function edit($id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return redirect()->route('admin')->with('error', 'Produk tidak ditemukan');
        }
    
        // Tentukan view berdasarkan ID
        $viewName = 'editbarang' . $id;
    
        return view($viewName, compact('product'));
    }
    

    // Mengupdate produk berdasarkan ID
    public function update(Request $request, $id)
    {
        $request->validate([
            'stok_s' => 'required|integer|min:0',
            'stok_m' => 'required|integer|min:0',
            'stok_l' => 'required|integer|min:0',
            'stok_xl' => 'required|integer|min:0',
        ]);

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin')->with('error', 'Produk tidak ditemukan');
        }

        $product->update([
            'stock_s' => $request->stok_s,
            'stock_m' => $request->stok_m,
            'stock_l' => $request->stok_l,
            'stock_xl' => $request->stok_xl,
        ]);

        return redirect()->route('editbarang' . $id)->with('success', 'Stok berhasil diupdate!');
    }
}
