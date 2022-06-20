<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswa72200408Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa72200408', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nim');
            $table->string('nama', 30);
            $table->string('agama', 30);
            $table->string('gender', 30);
            $table->string('hobi', 50);
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
        Schema::dropIfExists('mahasiswa72200408');
    }
}
