<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Authenticatable
{
    use HasFactory;
    const ROLE_ADMIN = 1;
    const ROLE_SHIPPER = 2;
    const ROLE_EDITER = 3;

    protected $guarded = [];

    use Notifiable;

 public const STATUS = [
        1 =>1,
        2 =>2,
        3 =>3,
    ];
    protected $table = 'admins';
    protected $fillable = [
        'name','email','password','address','phone','email_verified_at','remember_token','role_id'
    ];

    public function roles(){
        $this->belongsTo(Role::class,'role_id','id');
    }
}
