<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('comment');
            $table->integer('star')->default(4)->comment('status: (1: chưa hài lòng; 2: chưa tốt; 3: tạm hài lòng; 4: hài lòng; 5: hoàn hảo');
            $table->integer('image_review');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            
            $table->softDeletes();
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
        Schema::dropIfExists('review_products');
    }
}
