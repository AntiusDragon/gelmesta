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
            $table->decimal('slankumas_mm', 4, 1)->unsigned()->nullable();
            // $table->decimal('itraukto_oro_kiekis', 2, 1)->unsigned()->nullable();
            $table->decimal('plotis_mm', 4, 1)->nullable();
            $table->decimal('ilgis_mm', 4, 1)->nullable();
            $table->decimal('aukstis_mm', 4, 1)->nullable();
            $table->decimal('bandinio_mase_g', 6, 1)->nullable();
            $table->decimal('ardancioji_jega_kn', 6, 1)->nullable();
            $table->string('aprasas', 500)->nullable();
            $table->unsignedBigInteger('mixing_concrete_id')->nullable();
            $table->foreign('mixing_concrete_id')->references('id')->on('mixing_concretes');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
