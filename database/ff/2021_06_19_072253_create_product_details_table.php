<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->default(1);
            $table->foreignId('discount_id')->nullable()->constrained()->references('id')->on('discounts')->onDelete('cascade')->default(1);
            $table->foreignId('size_id')->references('id')->on('product_sizes')->onDelete('cascade')->default(1);
            $table->foreignId('status_id')->references('id')->on('statuses')->onDelete('cascade')->default(1);
            $table->double('purchased_price')->nullable();
            $table->double('suggested_price')->nullable();
            $table->double('selling_price')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('lock')->nullable();
            $table->integer('available')->nullable();
           
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
        Schema::dropIfExists('product_details');
    }
}
