<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Detail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'order_details';

    protected $fillable = [
        'product_id','order_id','quantity','price','total'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    
    public function price()
    {
        return $this->belongsTo(Price::class, 'price_id', 'id');
    }
}
