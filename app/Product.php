<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table='products';
    protected $fillable= ['name', 'description','price','factory_id','country_id'];

    public function country()
    {
    	return $this->belongsTo('App\Country');
    }

    public function factory()
    {
    	return $this->belongsTo('App\Factory');
    }
}
