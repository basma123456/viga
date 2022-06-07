<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('dimensions');
            $table->string('color');
            $table->date('estimated_delivery');
            $table->text('description');
            $table->string('main_image');
            $table->string('materials');
            $table->string("code", 15);
            $table->string('price',5 );
            $table->string('price_after_discount',5 )->nullable();
            $table->string('discount',5)->nullable();
            $table->enum("discount_type",['percentage','fixed'])->nullable();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->enum('product_type',['best_selling','hot_offers', 'recommended','new','default']);
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->cascadeOnUpdate();
            $table->foreign("sub_category_id")->references("id")->on("sub_categories")->onDelete("cascade")->cascadeOnUpdate();
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
        Schema::dropIfExists('products');
    }
}
