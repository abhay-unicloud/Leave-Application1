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
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('dpt_id');
            $table->integer('dst_id');
            $table->string('mobile_no');
            $table->integer('gender')->nullable();
            $table->integer('duty')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('staff');
    }
};
