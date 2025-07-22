<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('population_data', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // Total Penduduk, KK, Laki-laki, Perempuan, dll
            $table->integer('value');
            $table->string('unit')->default('Jiwa');
            $table->text('description')->nullable();
            $table->integer('year')->default(date('Y'));
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('population_data');
    }
};
