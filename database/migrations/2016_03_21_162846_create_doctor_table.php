<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblDoctor', function(Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('doctorId');
            $table->string('strFirstName', 45);
            $table->string('strMiddleName', 45)->nullable();
            $table->string('strLastName', 45);
            $table->string('strUsername', 45);
            $table->string('strPassword', 45);
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
        Schema:dropIfExists('tblDoctor');
    }
}
