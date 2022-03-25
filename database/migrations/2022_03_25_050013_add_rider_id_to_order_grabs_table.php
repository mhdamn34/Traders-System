<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRiderIdToOrderGrabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_grabs', function (Blueprint $table) {
            //

            $table -> unsignedBigInteger('rider_id')->nullable(true);
            $table-> foreign('rider_id')->references('id')->on('riders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_grabs', function (Blueprint $table) {
            //
        
            $table->dropForeign('order_grabs_rider_id_foreign');
            $table->dropColumn('rider_id');
        });
    }
}
