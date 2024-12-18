<?php

// database/migrations/xxxx_xx_xx_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Kolom untuk nama produk
            $table->string('harga'); // Kolom harga produk
            $table->integer('stock_s')->default(0); // Stok ukuran S
            $table->integer('stock_m')->default(0); // Stok ukuran M
            $table->integer('stock_l')->default(0); // Stok ukuran L
            $table->integer('stock_xl')->default(0); // Stok ukuran XL
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
