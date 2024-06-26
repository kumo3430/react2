<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product; 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class; 
    /** 
     * Define the model's default state. 
     * 
     * @return array<string, mixed> 
     */ 
    public function definition() 
    { 
        return [ 
            'name' => $this->faker->realText(10,true), 
            'description' => $this->faker->realText(50), 
        ]; 
    } 

}
