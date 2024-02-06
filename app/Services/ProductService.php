<?php 
namespace App\Services;

use App\Models\Product;

class ProductService 
{

  public function productRelation() 
  { 
      return Product::with('prices' , 'images'); 
  }
  public function getSingleProduct($column , $value) 
{ 
    return Product::with('prices' , 'images')->where($column , $value); 
}
}