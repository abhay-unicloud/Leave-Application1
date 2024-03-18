<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id('Emp_id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Designation');
            $table->integer('Mobile_No.');
            $table->enum('Gender', array('Male','Female','Other'))->nullable()->change();
            $table->enum('Duty', array('Online','Offline'))->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
