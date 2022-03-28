<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            $table->date('created_by');
            $table->date('submitted_date');
            $table->date('creation_date');
            $table->unsignedBigInteger('status_id');
            $table->date('expected_date');
            $table->integer('shipping_fee');
            $table->integer('taxes');
            $table->date('payment_date');
            $table->integer('payment_amount');
            $table->string('payment_method');
            $table->string('notes');
            $table->string('approved_by');
            $table->date('approved_date');
            $table->string('submitted_by');

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers')
                ->onCascade('delete');

            $table->foreign('status_id')
                ->references('id')
                ->on('purchase_orders_status')
                ->onCascade('delete');


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
        Schema::dropIfExists('purchase_orders');
    }
}
