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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('emp_id');
            $table->string('leave_types');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->string('location');
            $table->enum('status', array('Appoved','Decline','Pending'))->default('Pending')->nullable()->change();
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
