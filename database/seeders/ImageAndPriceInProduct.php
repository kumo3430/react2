<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Image;
use App\Models\Price;
class ImageAndPriceInProduct extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(30)->create();
        // 为每个产品创建 1 到 3 个图片
        $products->each(function ($product) {
            Image::factory()->count(1)->create([
                'product_id' => $product->id,
                'image_path' => 'https://pic.616pic.com/ys_img/00/44/76/yYdFMozXJd.jpg',
            ]); 

            Price::factory()->count(30)->create([
                'product_id' => $product->id,
                'price' => 99 // 显式提供价格值
            ]); 
        });
    }
}
