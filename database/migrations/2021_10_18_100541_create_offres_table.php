<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->boolean('visible')->default(true);
            $table->foreignId('categorie_bien_id')->constrained();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade')->default(NULL);
            $table->foreignId('agence_id')->nullable()->constrained()->onDelete('cascade')->default(NULL);
            $table->integer('nombreAppartement')->default(0);
            $table->integer('nombreStudio')->default(0);
            $table->integer('nombreChambre')->default(0);
            $table->boolean('isMeuble')->default(false);
            $table->boolean('hasGarage')->default(false);
            $table->boolean('hasCuisine')->default(false);
            $table->boolean('hasToilettePublique')->default(false);
            $table->boolean('hasSalon')->default(false);
            $table->boolean('hasToiletteInterieure')->default(false);
            $table->string('niveau')->default(null)->nullable();
            $table->integer('nombreChambreAvecToilette');
            $table->string('ville')->require();
            $table->text('adresse')->require();
            $table->bigInteger('prix')->require();
            $table->text('description')->nullable();
            $table->float('superficie')->nullable();
            $table->float('longueur')->nullable();
            $table->float('largeur')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->boolean('geolocalise')->default(false);
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
        Schema::dropIfExists('offres');
    }
}
