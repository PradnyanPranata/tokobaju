<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',    // Nama produk
        'harga',   // Harga produk
        'stock_s', // Stok ukuran S
        'stock_m', // Stok ukuran M
        'stock_l', // Stok ukuran L
        'stock_xl' // Stok ukuran XL
    ];

    // Menambah stok produk berdasarkan ukuran
    public function addStock($size, $quantity)
    {
        if (in_array($size, ['s', 'm', 'l', 'xl'])) {
            $this->increment("stock_$size", $quantity);
        }
    }

    // Mengurangi stok produk berdasarkan ukuran
    public function reduceStock($size, $quantity)
    {
        if (in_array($size, ['s', 'm', 'l', 'xl'])) {
            $this->decrement("stock_$size", $quantity);
        }
    }

    // Relasi ke tabel transactions (One-to-Many)
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
