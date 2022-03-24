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
            $table->string('order_id');
            $table->string('employee_id');
            $table->string('customer_id');
            $table->string('order_date');
            $table->string('shipped_date');
            $table->string('shipper_id');
            $table->string('ship_name');
            $table->string('ship_address');
            $table->string('ship_city');
            $table->string('ship_state');
            $table->string('ship_zip');
            $table->string('ship_country');
            $table->string('shipping_fee');
            $table->string('taxes');
            $table->string('payment_type');
            $table->string('paid_date');
            $table->string('notes');
            $table->string('tax_rate');
            $table->string('tax_status');
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
        Schema::dropIfExists('orders');
    }
}
