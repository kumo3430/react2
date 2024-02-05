<?php 
namespace App\Services;

use App\Models\Product;

class ProductService 
{

  public function productRelation() 
  { 
      return Product::with('prices' , 'images'); 
  }
}