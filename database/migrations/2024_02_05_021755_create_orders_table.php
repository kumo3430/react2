<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); 
            $table->foreignUuid('number')->comment('訂單編號'); 
            $table->foreignIdFor(User::class); 
            $table->enum('type',['PREPARE','DELIVERY','COMPLETE','RETURN'])->default('PREPARE')->index()->comment('狀態(準備中、配送中、完成、退貨)'); 
            $table->string('phone_number',15)->comment('手機號碼'); 
            $table->string('address')->index()->comment('運送地址'); 
            $table->bigInteger('price')->unsigned()->comment('訂單金額'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
