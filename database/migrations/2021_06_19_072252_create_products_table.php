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
        // Some times, in some countries, some products has different type of tax rates.
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
         //   $table->string('sku')->nullable()->comment("product's stock keeping unit");
            $table->foreignId('product_owner')->references('id')->on('users')->onDelete('cascade')->default(1);
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade')->default(1);
            $table->foreignId('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade')->default(1);
           // $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('tax_type_1')->nullable();  // TaxRate 
            $table->bigInteger('created_by_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
