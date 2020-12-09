<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->decimal('price');
            $table->decimal('cost_price');
            $table->integer('quantity');
            $table->integer('shipping')->nullable();
            $table->string('weight')->nullable();
            $table->decimal('special_price')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('information')->nullable();
            $table->integer('total_sale')->nullable();
            $table->decimal('rating')->nullable();
            $table->string('slug');
            $table->string('photo')->nullable();
            $table->boolean('is_featured');
            $table->boolean('free_shipping');
            $table->boolean('status')->default(1);

            $table->timestamps();
            $table->softDeletes();
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
