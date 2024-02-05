<?php

namespace Database\Seeders;

use App\Models\Product; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
    public function run() 
    { 
        DB::table('products')->truncate(); 
        Product::unguard(); 
        Product::factory()->count(30)->create(); 
        Product::reguard(); 
    } 
}
