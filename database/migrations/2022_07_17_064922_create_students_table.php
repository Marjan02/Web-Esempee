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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kelamin');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('asalsekolah');
            $table->string('lahir');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('namaortu');
            $table->string('alamat');
            $table->string('hportu');
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
        Schema::dropIfExists('students');
    }
};
