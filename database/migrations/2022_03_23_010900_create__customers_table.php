<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('job_title');
            $table->string('business_phone');
            $table->string('home_phone');
            $table->string('mobile_phone');
            $table->string('fax_number');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->string('web_page');
            $table->string('notes');
            $table->softDeletes();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('customers', function(Blueprint $table) {
        //     $table->dropForeign('customers_user_id_foreign');
        // });
        Schema::dropIfExists('customers');
    }
}
