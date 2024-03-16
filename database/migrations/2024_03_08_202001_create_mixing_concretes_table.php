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
        Schema::create('mixing_concretes', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('delete')->unsigned()->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedBigInteger('maisikles_id')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedBigInteger('maisikles_recepto_id')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedBigInteger('user_maise_id')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            $table->unsignedBigInteger('user_edit_id')->nullable(false); // pridėtas 'unsigned' ir 'nullable(false)' 
            // $table->dateTime('edit_data'); // pakeistas 'string' į 'dateTime'
            // $table->dateTime('maisimo_data'); // pakeistas 'string' į 'dateTime'
            $table->enum('marke', ['C8/10', 'C12/15', 'C16/20', 'C20/25', 'C25/30', 'C30/37', 'C35/45', 'C40/50', 'C45/55', 'C50/60', 'C55/67', 'C60/75', 'C70/85', 'C80/95', 'C90/105', 'C100/115', 'SMELIS', 'LC8/9', 'LC12/13', 'LC16/18', 'LC20/22', 'LC25/28', 'LC30/33', 'LC35/38', 'LC40/44', 'LC45/50', 'LC50/55', 'LC55/60', 'LC60/66', 'LC70/77', 'LC80/88'])->nullable(false); // pakeistas 'string' į 'enum' su variantais
            $table->enum('slankumo_klase', ['S1', 'S2', 'S3', 'S4', 'S5'])->nullable(false); // pakeistas 'string' į 'enum' su variantais
            $table->string('tipas')->nullable(); // pakeistas 'string'
            $table->enum('salcio_priedai', ['F50', 'F100', 'F150', 'F200', 'F250', 'F300', 'XF1', 'XF2', 'XF3', 'XF4'])->nullable(); // pakeistas 'string' į 'enum' su variantais
            $table->tinyInteger('pagaminti_kubeliai')->unsigned()->nullable(); // pridėtas 'unsigned' ir pakeistas į 'tinyInteger'
            $table->string('maisykle', 10)->nullable(false); // pridėtas ilgio nurodymas ir 'nullable(false)'
            $table->decimal('kiekis_m3', 6, 2); // pakeistas 'string' į 'decimal'
            $table->string('uzsakymo_nr', 10)->nullable(false); // pridėtas ilgio nurodymas ir 'nullable(false)'
            $table->char('uzsakymo_raide', 5)->nullable(false); // pakeistas 'string' į 'char' su nurodytu ilgiu ir 'nullable(false)'
            $table->string('uzsakovas', 250); // pakeistas 'string'
            $table->string('komentaras', 500)->nullable(); // pridėtas ilgio nurodymas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mixing_concretes');
    }
};
