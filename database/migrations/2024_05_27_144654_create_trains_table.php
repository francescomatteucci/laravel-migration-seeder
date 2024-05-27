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
        //creiamo una tabella nel db chiamata "trains" con le relative proprietà e tipo di ogni proprietà
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 60);
            $table->string('stazione_di_partenza', 40);
            $table->string('stazione_di_arrivo', 40);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno', 10, 0);
            $table->tinyInteger('numero_carrozze');
            $table->string('in_orario', 2);
            $table->string('cancellato', 2);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
