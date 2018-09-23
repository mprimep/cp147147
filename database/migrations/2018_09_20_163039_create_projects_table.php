<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('commune',500);
            $table->string('douar',500);
            $table->string('liaison',500);
            $table->string('cout',500);
            $table->string('longueur',500);
            $table->string('nb_ouvrages',500);
            $table->string('type_d_intervention',500);
            $table->string('programme',500);
            $table->string('sous_programme',500);
            $table->string('etat_d_avancement',500);
            $table->string('annee_de_l_operation',500);
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
        Schema::dropIfExists('projects');
    }
}
