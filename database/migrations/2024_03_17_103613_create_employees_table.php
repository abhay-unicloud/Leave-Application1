<?php
use Doctrine\DBAL\Types\Type;
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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('emp_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation');
            $table->integer('mobile_no');
            $table->enum('gender', array('Male','Female','Other'))->nullable()->change();
            $table->string('addresses');
            // $table->string('LeaveTypes');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
