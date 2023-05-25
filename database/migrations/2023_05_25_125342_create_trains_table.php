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
            $table->string('azienda')->unsigned();
            $table->string('stazione_partenza')->unsigned();
            $table->string('stazione_arrivo')->unsigned();
            $table->time('orario_partenza')->unsigned();
            $table->time('orario_arrivo')->unsigned();
            $table->string('codice_treno')->unsigned();
            $table->integer('numero_carrozze')->nullable();
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
