<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmployeeIdToEmployeePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_privileges', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('employee_id')->nullable(true);
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->unsignedBigInteger('privileges_id')->nullable(true);
            $table->foreign('privileges_id')->references('id')->on('privileges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_privileges', function (Blueprint $table) {
            //
            $table->dropForeign('employee_privileges_employee_id_foreign');
            $table->dropColumn('employee_id');
            $table->dropForeign('employee_privileges_privilege_id_foreign');
            $table->dropColumn('privilege_id');
        });
    }
}
