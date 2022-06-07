<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('governorate_id');
            $table->string('phone', 20);
            $table->string('other_phone', 20)->nullable();
            $table->string('address');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign("city_id")->references("id")->on("cities")->onDelete("cascade")->cascadeOnUpdate();
            $table->foreign("governorate_id")->references("id")->on("governorates")->onDelete("cascade")->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
