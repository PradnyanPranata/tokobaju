<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke tabel users
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Relasi ke tabel products
            $table->integer('quantity');
            $table->enum('size', ['S', 'M', 'L', 'XL']);
            $table->string('nama_pembeli'); // Nama pembeli diambil dari user
            $table->string('payment_method'); // Menambahkan kolom payment_method untuk metode pembayaran
            $table->string('transfer_proof')->nullable(); // Kolom untuk bukti transfer
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
    
};
