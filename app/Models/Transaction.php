<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
        'size',
        'user_id',
        'nama_pembeli',
        'payment_method',
        'transfer_proof' // Menambahkan transfer_proof ke dalam fillable
    ];
    

    // Relasi balik ke model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relasi balik ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

