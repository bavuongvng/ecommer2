<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->unique();
            $table->text("short_description");
            $table->text("description");
            $table->integer("publish");
            $table->integer("hot_product");
            $table->integer("category_id");
            $table->integer("ordering");
            $table->float("price");
            $table->integer("amount");
            $table->string("image_intro");
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
        //
    }
}
