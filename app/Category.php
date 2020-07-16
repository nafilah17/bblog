<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['id','name'];

    public $timestamps = false;

    public function article(){
    	return $this->hasMany('App\Article', 'category_id');
    }
}
