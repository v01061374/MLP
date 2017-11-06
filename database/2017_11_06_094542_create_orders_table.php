<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cart_id')->unsigned();
            $table->text('addressDetails');
            $table->text('postalCode');
            $table->integer('totalPrice');
            $table->integer('shippingMethod_id')->unsigned();
            $table->boolean('isPaid');
            $table->boolean('isSent');
            $table->boolean('isDelivered');
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->foreign('shippingMethod_id')->references('id')->on('shipping_methods');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
