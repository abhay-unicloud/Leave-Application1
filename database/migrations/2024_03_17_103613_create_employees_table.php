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
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('dpt_id');
            $table->integer('dst_id');
            $table->string('mobile_no');
            $table->integer('gender')->nullable();
            $table->string('addresses')->nullable();
            $table->string('password');
            $table->integer('status')->nullable();
            
            $table->timestamps();
            $table->integer('delete1');
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
