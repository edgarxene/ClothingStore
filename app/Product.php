<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('category_id','titulo','descripcion','precio','disponible','imagen');
/*    public static $rules = array(
    	'category_id'=>'required|integer',
    	'titulo'=>'required|min:2',
    	'descripcion'=>'required|min:20',
    	'precio'=>'required|numeric',
    	'disponible'=>'integer',
    	'imagen'=>'required|image|mimes:jpeg,jpg,bmp,png,gif'
    	);
*/
    public function category(){
    	return $this->belongsTo('Category');
    }

}