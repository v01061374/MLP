<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
    protected $fillable = ['customer_id','addressDetails', 'postalCode', 'totalPrice', 'isPaid', 'isSent', 'isDelivered'];
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function items()
    {
        return $this->hasMany('App\OrderItem', 'order_id');
    }
//    public function shippingMethod(){
//        return $this->hasOne('App\ShippingMethod', 'shippingMethod_id');
//    }
    public function products(){
        return $this->hasManyThrough('App\Product','App\OrderItem','order_id', 'id');
    }
    
}
