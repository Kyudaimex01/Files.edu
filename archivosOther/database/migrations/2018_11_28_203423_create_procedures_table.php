<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures', function (Blueprint $table) {
            $table->increments('id_pro');
            $table->string('name_procedure',500);
            $table->string('requirements_procedure',10000);
            $table->string('img_procedure',500);
            $table->integer('internal_time')->nullable();
            $table->integer('external_time')->nullable();
            $table->string('advice',2500)->nullable();
            $table->string('type_pro',300);
            $table->timestamps();
            //$table->date('expirated_at')->nullable();
            $table->integer('posted_by')->unsigned();
            $table->foreign('posted_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedures');
    }
}
