<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'name','image','status','description','price','quantity','category_id',
    ];

    public function category(){
      return   $this->belongsTo(Category::class,'category_id','id');
    }

   public function product_images(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    /**
     * Get the post_detail for the post.
     */
    public function product_detail()
    {
        return $this->hasOne(Product_Detail::class,'product_id','id');
    }
    public function review_product(){
      return  $this->hasMany(Review_Product::class,'product_id','id');

    }}
