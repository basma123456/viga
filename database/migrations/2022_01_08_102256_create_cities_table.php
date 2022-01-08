<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail_image');
            $table->string('banner_image');
            $table->string('seo_title');
            $table->string("slug");
            $table->mediumText('meta_description');
            $table->decimal('latitude',10, 8);
            $table->decimal('longitude',11, 8);
            $table->boolean('status');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();
            $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade")->cascadeOnUpdate();
            $table->foreign("country_id")->references("id")->on("countries")->onDelete("cascade")->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
