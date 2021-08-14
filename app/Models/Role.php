<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Role extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'roles';
    protected $fillable = [
        'name'
    ];

    public function admins(){
        return $this->hasMany(Admin::class);
    }
}
