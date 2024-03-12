<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lab_concretes', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('slankumas_mm')->unsigned()->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->tinyInteger('itraukto_oro_kiekis')->unsigned()->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedInteger('plotis_mm')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedInteger('ilgis_mm')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedInteger('aukstis_mm')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedInteger('bandinio_mase_g')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedInteger('ardancioji_jega_kn')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedBigInteger('mixing_concrete_id')->nullable();
            $table->foreign('mixing_concrete_id')->references('id')->on('mixing_concretes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_concretes');
    }
};
