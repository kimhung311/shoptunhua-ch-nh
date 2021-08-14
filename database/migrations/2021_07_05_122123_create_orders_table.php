<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('total_order');
            $table->softDeletes();
            $table->timestamps();
              // $table->tinyint('status')->default(4)->comment('status: (
            // 1: chưa thanh toán; 
            // 2:  đã thanh toán ;
            // 3: đang giao hàng;
            // 4:   đơn hàng đã  được  giao;
            // 5:  hoàn thành'
            // );
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
