<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_privileges', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->string('privilege_id');
            $table->foreignId('employee_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('privilege_id')->constrained()->onDelete('CASCADE');
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
        Schema::dropIfExists('employee_privileges');
    }
}
