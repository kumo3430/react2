<?php 
namespace App\Variable; 
class ProductVariable 
{ 
    private $product_title; 
    private $product_description; 
    private $product_image; 
    private $product_price; 
    public function __construct($orig_data) 
    { 
        $this->product_title = $orig_data->name; 
        $this->product_description = $orig_data->description; 
        $this->product_image = $orig_data->images->first()->image_path; 
    } 

    public function jsonSerialize() {
      return [
          'product_title' => $this->product_title,
          'product_description' => $this->product_description,
          'product_image' => $this->product_image,
          'product_price' => $this->product_price,
      ];
  }
    /** 
     * @return mixed 
     */ 
    public function getProductTitle() 
    { 
        return $this->product_title; 
    } 
    /** 
     * @param mixed $product_title 
     */ 
    public function setProductTitle($product_title): void 
    { 
        $this->product_title = $product_title; 
    } 
    /** 
     * @return mixed 
     */ 
    public function getProductDescription() 
    { 
        return $this->product_description; 
    } 
    /** 
     * @param mixed $product_description 
     */ 
    public function setProductDescription($product_description): void 
    { 
        $this->product_description = $product_description; 
    } 
     
    /** 
     * @return mixed 
     */ 
    public function getProductImage() 
    { 
        return $this->product_image; 
    } 
    /** 
     * @param mixed $product_image 
     */ 
    public function setProductImage($product_image): void 
    { 
        $this->product_image = $product_image; 
    } 
    /** 
     * @return mixed 
     */ 
    public function getProductPrice() 
    { 
        return $this->product_price; 
    } 
    /** 
     * @param mixed $product_price 
     */ 
    public function setProductPrice($product_price): void 
    { 
        $this->product_price = $product_price; 
    } 
}