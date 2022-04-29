<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revues', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('volume')->nullable();
            $table->string('issue')->nullable();
            $table->integer('nbrPage')->nullable();
            $table->string('discipline')->nullable();
            $table->string('auteurPrincipal');
            $table->string('autreAuteurs')->nullable();
            $table->string('fichier')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('revues');
    }
}
