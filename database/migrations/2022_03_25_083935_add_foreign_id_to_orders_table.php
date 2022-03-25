<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table -> unsignedBigInteger('employee_id')->nullable(true);
            $table -> foreign('employee_id')->references('id')->on('employees');

            $table->unsignedBigInteger('customer_id')->nullable(true);
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->unsignedBigInteger('shipper_id')->nullable(true);
            $table->foreign('shipper_id')->references('id')->on('shippers');

            $table->unsignedBigInteger('status_id')->nullable(true);
            $table->foreign('status_id')->references('id')->on('order_status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->dropForeign('order_employee_id_foreign');
            $table->dropColumn('employee_id');
            $table->dropForeign('order_customer_id_foreign');
            $table->dropColumn('customer_id');
            $table->dropForeign('order_shipper_id_foreign');
            $table->dropColumn('shipper_id');
            $table->dropForeign('order_status_id_foreign');
            $table->dropColumn('status_id');
        });
    }
}
