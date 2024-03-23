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
            $table->string('lt_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->string('location');
            $table->integer('status1')->nullable();
            $table->string('comment')->nullable();
            $table->integer('status');
            $table->integer('delete1');
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
        Schema::dropIfExists('leaves');
    }
};
