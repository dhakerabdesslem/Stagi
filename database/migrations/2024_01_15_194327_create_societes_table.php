<?php
// database/migrations/YYYY_MM_DD_create_societes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietesTable extends Migration
{
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('Lib');
            $table->string('Adresse');
            $table->string('Tel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('societes');
    }
}
