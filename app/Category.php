<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

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
    protected $fillable = ['title', 'photo', 'parent_id'];

    //add parent and children relations
    public function subcategories(){
//        $this->hasMany('App\Category', 'parent_id', 'id');
        return $this->hasManyThrough('App\Category','App\Category','parent_id', 'parent_id');
    }
    public function products(){
        return $this->hasMany('App\Product', 'category_id');
    }

}
