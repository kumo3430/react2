<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_images', function (Blueprint $table) { 
            $table->id(); 
            // $table->foreignIdFor(\App\Models\Product::class)->comment('商品id'); 
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->comment('商品id');
            $table->text('image_path')->comment('圖片網址'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
