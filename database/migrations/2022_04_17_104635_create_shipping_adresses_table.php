<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_adresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('full_name');
            $table->string('country');
            $table->string('phone_number');
            $table->string('street_name');
            $table->string('building_name');
            $table->string('city');
            $table->string('landmark');
            $table->string('delivery_instructions')->nullable();
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
        Schema::dropIfExists('shipping_adresses');
    }
}
