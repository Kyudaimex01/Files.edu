<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id_history');
            $table->string('intro');
            /**
            $table->string('1rst_date')->nullable();
            $table->string('1rst_section')->nullable();
            $table->string('2nd_date')->nullable();
            $table->string('2nd_section')->nulable();
            $table->string('3rt_date')->nullable();
            $table->string('3rt_section')->nulable();
            $table->string('4rt_date')->nullable();
            $table->string('4rt_section')->nulable();
            */
            $table->string('stages')->nullable();
            $table->string('img_struct')->nullable();
            $table->string('structure')->nullable();
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
        Schema::dropIfExists('histories');
    }
}
