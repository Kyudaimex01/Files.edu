<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->increments('id_cert');
            $table->string('name_c');
            $table->string('description_c');
            $table->string('img_cert');
            $table->timestamps();
            //$table->date('expirated_at')->nullable();
            $table->integer('c_by')->unsigned();
            $table->foreign('c_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certifications');
    }
}
