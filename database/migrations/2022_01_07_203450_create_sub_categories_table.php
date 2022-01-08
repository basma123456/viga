<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table){
            $table->id();;
            $table->string("icon_subcategory",50)->nullable();
            $table->string("icon_map",50)->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('is_feature')->default(0); // is for show in main page or not
            $table->string('name');
            $table->string('seo_title');
            $table->integer("priority"); // for sorting the categories
            $table->mediumText("meta_description");
            $table->string("slug");
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade")->cascadeOnUpdate();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
