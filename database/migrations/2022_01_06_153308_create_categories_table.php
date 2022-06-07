<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->integer("priority"); // for sorting the categories
            $table->string('name');
            $table->string('category_code')->unique();
            $table->string('seo_title');
            $table->string('has_child');
            $table->mediumText("meta_description");
            $table->string("slug");
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();
            $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade")->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
