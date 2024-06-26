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
        Schema::create('product_prices', function (Blueprint $table) { 
            $table->id(); 
            // $table->foreignIdFor(\App\Models\Product::class)->comment('商品id'); 
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->comment('商品id');
            $table->enum('user_type',['NORMAL','SUPER','STAFF'])->default('NORMAL')->index()->comment('會員等級(普通、超級、員工)'); 
            $table->bigInteger('price')->unsigned()->comment('商品單價'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};
