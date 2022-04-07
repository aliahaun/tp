<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nomP', 'Prix', 'description', 'Category_id','img'];

   public function category(){

       return $this->belongsTo(Category::class, 'Category_id');
       
   }
  
}
