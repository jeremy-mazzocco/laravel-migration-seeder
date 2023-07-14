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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda', 64);
            $table->string('stazione_di_partenza', 64);
            $table->string('stazione_di_arrivo', 64);
            $table->string('orario_di_partenza');
            $table->string('orario_di_arrivo');
            $table->integer('codice_treno')->unique();
            $table->unsignedInteger('numero_di_carrozze')->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);

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
        Schema::dropIfExists('trains');
    }
};
