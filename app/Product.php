<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'photo', 'category_id', 'store_id', 'offPercent', 'inStock'];

    public function photos()
    {
        return $this->hasMany('App\Photo', 'product_id');
    }
    public function categories(){
        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id');
    }
    public function store(){
        return $this->belongsTo('App\Store', 'store_id');
    }
}
