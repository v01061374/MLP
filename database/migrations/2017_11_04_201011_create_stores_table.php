<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('address');
            $table->text('coverImage')->nullable();
            $table->taxt('logo')->nullable();
            $table->double('lat');
            $table->double('lng');
            $table->integer('zone_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->boolean('saturday');
            $table->boolean('sunday');
            $table->boolean('monday');
            $table->boolean('tuesday');
            $table->boolean('wednesday');
            $table->boolean('thursday');
            $table->boolean('friday');
            $table->integer('openingHour');
            $table->integer('closingHour');
            $table->foreign('owner_id')->references('id')->on('users')
                //                ->onDelete('cascade')->onUpdate('cascade')
            ;
            $table->boolean('isVerified')->default(false);
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
        Schema::drop('stores');
    }
}
