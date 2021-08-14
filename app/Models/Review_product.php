<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Review_product extends Model
{
    use HasFactory;
    use Notifiable;

    protected $talbe = 'review_products';
    protected $fillable = [
        'user_id','comment','star','product_id','image_review'
    ];

    public function product(){
        return   $this->belongsTo(Product::class,'product_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
