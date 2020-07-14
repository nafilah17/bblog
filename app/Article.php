<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = ['author_id','category_id','title','content'];

    public function category(){
    	return $this->hasOne('App\Category');
    }

    public function user(){
    	return $this->hasOne('App\User');
    }
}
