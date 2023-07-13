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
            $table->string('stazione di partenza', 64);
            $table->string('stazione di arrivo', 64);
            $table->dateTime('orario di partenza');
            $table->dateTime('orario di arrivo');
            $table->integer('codice treno')->unique();
            $table->integer('numero di carrozze')->nullable();
            $table->boolean('in orario')->default(true);
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
