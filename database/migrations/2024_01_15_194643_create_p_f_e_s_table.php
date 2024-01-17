<?php
// database/migrations/YYYY_MM_DD_create_pfes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePfesTable extends Migration
{
    public function up()
    {
        Schema::create('pfes', function (Blueprint $table) {
            $table->id('PFEID');
            $table->string('Titre');
            $table->text('Description');
            $table->date('DateD');
            $table->date('DateF');
            $table->foreignId('EnseignantID')->constrained('enseignants');
            $table->foreignId('SocieteID')->constrained('societes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pfes');
    }
}

