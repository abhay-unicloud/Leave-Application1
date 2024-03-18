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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id('Leave_id');
            $table->integer('Emp_id');
            $table->string('LeaveTypes');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->string('Location');
            $table->enum('Status', array('Appoved','Decline','Pending'))->default('Pending')->nullable()->change();
            $table->string('comment')->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
};
