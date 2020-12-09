<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->string('billing_address');
            $table->string('billing_name');
            $table->string('billing_mobile');
            $table->text('notes');
            $table->string('shipping_name')->nullable();
            $table->string('shipping_mobile')->nullable();
            $table->string('shipping_address')->nullable();
            $table->float('sub_total');
            $table->decimal('profit');
            $table->decimal('total');
            $table
                ->enum('status', ['pending', 'processing', 'delivered'])
                ->default('pending');

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
        Schema::dropIfExists('orders');
    }
}
