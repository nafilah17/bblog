<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

   
    protected $fillable = [
        'name', 'email', 'role', 'profile_id', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = "users";


    public $timestamps = false;
    
    public function article(){
        return $this->hasMany('App\Article', 'author_id');
    }

    public function profile(){
        return $this->hasOne('App\Profile');

    }
}
