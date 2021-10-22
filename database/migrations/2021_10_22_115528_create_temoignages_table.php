<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemoignagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temoignages', function (Blueprint $table) {
            $table->id();
            $table->string('clientName')->require();
            $table->string('fonction')->nullable();
            $table->string('message')->require();
            $table->string('photo')->nullable();
            $table->foreignId('agence_id')->constrained();
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
        Schema::dropIfExists('temoignages');
    }
}
