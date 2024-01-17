<?php

// database/migrations/YYYY_MM_DD_create_pfe_etudiants_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePfeEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::create('pfe_etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PFEID')->constrained('pfes');
            $table->foreignId('EtudiantID')->constrained('etudiants');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pfe_etudiants');
    }
}

