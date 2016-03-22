<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tblMedicalRecord', function(Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('medicalRecordsId');
            $table->text('txtDiagnosis');
            $table->timestamps();
            
            $table->integer('patientIdFK')->unsigned();
            $table->foreign('patientIdFK')->references('patientId')->on('tblPatient');

        });

           //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:dropIfExists('tblMedicalRecord'); //
    }
}
