<?php 
namespace App\Http\Controllers; 

use Inertia\Inertia;
use App\Services\ProductService;
use App\Variable\ProductVariable;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller 
{ 
  protected $product_service; // 使用 camelCase 命名屬性
  protected $user; // 存储认证用户
  protected $user_type = 'NORMAL'; // 默认用户类型
  public function __construct(ProductService $product_service) 
  { 
    $this->product_service = $product_service; 
    $user_type = 'NORMAL'; 
    $this->middleware(function($request , $next){ 
        if (Auth::check()){ 
            $user = Auth::user(); 
            $this->user = $user; 
            $user_type = $user->type; 
        } 
        return $next($request); 
    }); 
    $this->user_type = $user_type; 
  } 
  public function index() 
  { 
    $user_type = 'NORMAL'; 
    if(Auth::check()){ 
        $user = Auth::user(); 
        $user_type = $user->type; 
    } 
    $render_product = []; 
    foreach($this->product_service->productRelation()->get() as $key => &$product){ 
      // dd($product);
        $new_product = new ProductVariable($product); 
        $new_product->setProductPrice($product->prices->where('user_type',$user_type)->first()->price); 
        // array_push($render_product, $new_product); 
        $product_array = [
          'product_title' => $new_product->getProductTitle(),
          'product_description' => $new_product->getProductDescription(),
          'product_image' => $new_product->getProductImage(),
          'product_price' => $new_product->getProductPrice(),
      ];
      array_push($render_product, $product_array); 
    } 
    // dd($render_product);
    return Inertia::render('Home', [ 
        'product' => $render_product, 
    ]); 
  } 
  public function product($product_id) 
  { 
    $user_type = 'NORMAL'; 
    if(Auth::check()){ 
        $user = Auth::user(); 
        $user_type = $user->type; 
    } 
     
    $product = $this->product_service->getSingleProduct('id' , $product_id)->first(); 
    $new_product = new ProductVariable($product); 
    $new_product->setProductPrice($product->prices->where('user_type',$user_type)
                ->first()->price); 

    $product_array = [
      'product_title' => $new_product->getProductTitle(),
      'product_description' => $new_product->getProductDescription(),
      'product_image' => $new_product->getProductImage(),
      'product_price' => $new_product->getProductPrice(),
    ];
    return Inertia::render('ProductDetail' , [ 
        'product' => $product_array, 
    ]);
  }
}