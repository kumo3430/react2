<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->truncate(); 
        Image::unguard(); 
        Image::factory()->count(30)->create([
            'image_path' => 'https://pic.616pic.com/ys_img/00/44/76/yYdFMozXJd.jpg',
        ]); 
        Image::reguard(); 
    }
}
