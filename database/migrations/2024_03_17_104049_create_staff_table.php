<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\Type;
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
            $table->id();
            $table->bigInteger('emp_id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Designation');
            $table->integer('MobileNo');
            $table->enum('gender', array('Male','Female','Other'))->nullable()->change();
            $table->enum('duty', array('Online','Offline'))->nullable()->change();
            
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
