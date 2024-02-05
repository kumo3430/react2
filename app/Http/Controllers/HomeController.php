<?php 
namespace App\Http\Controllers; 

use Inertia\Inertia;
use App\Services\ProductService;

class homeController extends Controller 
{ 
  protected $product_service; // 使用 camelCase 命名屬性
  public function __construct(ProductService $product_service) 
  { 
      $this->product_service = $product_service; 
  } 
  public function index() 
  { 
      // dd(123); 

      $all_product = $this->product_service->productRelation()->get();
      // dd($all_product); 
      return Inertia::render('Home', [ 
          'product' => $all_product, 
      ]); 
  } 
     
}