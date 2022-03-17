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
            $table->string('productName');
            $table->foreignId('SupplierID')->nullable();;
            $table->foreignId('CategoryID')->nullable();;
            $table->string('quantityPerUnit');
            $table->string('unitPrice');
            $table->integer('unitStock');
            $table->integer('unitOrder');
            $table->integer('reorderLevel');
            $table->integer('discontinued');
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
