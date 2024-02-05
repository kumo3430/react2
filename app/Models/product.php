<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends BaseModel
{
    use HasFactory;
    protected $table = 'products'; 
    protected $guarded = []; 
    public function images() 
    { 
        return $this->hasMany(Image::class); 
    } 
    public function prices() 
    { 
        return $this->hasMany(Price::class); 
    } 
}
