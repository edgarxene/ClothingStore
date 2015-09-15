<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = array('name');//Atributos que pueden ser ingresados por el ususario
	//public static $rules = array('name'=>'required|min:3');
    
    public function products(){
    	return $this->hasMany('Product');
    }
}
