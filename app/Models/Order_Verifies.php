<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Verifies extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'order_verifies';
    protected $fillable = [
        'status','user_id','code','expire_date',
    ];

    public const STATUS = [
        0, // code avilable
        1, //  code expired data or not available
    ];
}
