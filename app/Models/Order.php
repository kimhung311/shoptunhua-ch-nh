<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;



    /**
   * Define variable STATUS
   *1: chưa thanh toán; 
   *2:  đã thanh toán ; 
   *3: đang giao hàng;
   *4:  đơn hàng đã  được  giao;
   *5:  hoàn thành'
   **/
    const RECORD_LIMIT = 10;

    public const STATUS = [
        1=>1,
        2=>2,
        3=>3,
        4=>4,
        5=>5,
    ];

    protected $table = 'orders';

    protected $fillable = [
        'user_id','status','total_order'
    ];

    public function user(){
      return  $this->belongsTo(User::class,'user_id','id');
    }

    public function order_detail(){
        return  $this->HasMany(Order_Detail::class,'order_id','id');
    }
}
