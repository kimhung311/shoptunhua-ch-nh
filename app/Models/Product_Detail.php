<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product_Detail extends Model
{
    use HasFactory;
    use Notifiable;
    
    protected $table = 'product_details';
    protected $fillable = [
        'content',
        'product_id',
    ];


    public function product(){
      return  $this->belongsTo(Product::class,'product_id','id');
    }
}
