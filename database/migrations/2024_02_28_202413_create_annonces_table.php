<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('annonces');
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('titre');
            $table->integer('prix');
            $table->string('mark');
            $table->string('modele');
            $table->integer('year');
            $table->string('city');
            $table->string('cv');
            $table->integer('km');
            $table->string('carburant');
            $table->string('box');
            $table->string('etat');
            $table->integer('nb_Door');
            $table->string('origine');
            $table->string('premiere_main');
            $table->string('video');
            $table->string('reel');
            $table->string('bodywork');
            $table->string('status');
            $table->string('image');
            $table->string('imgrapport');
            $table->string('rapport');
            $table->string('co2');
            $table->integer('certifie')->unsigned()->default(0);
            $table->integer('showroom')->unsigned()->default(0);
            $table->integer('finance')->unsigned()->default(0);
            $table->integer('jantesA')->unsigned()->default(0);
            $table->integer('airbags')->unsigned()->default(0);
            $table->integer('climatisation')->unsigned()->default(0);
            $table->integer('gps')->unsigned()->default(0);
            $table->integer('toit_ouvrant')->unsigned()->default(0);
            $table->integer('siege_cuir')->unsigned()->default(0);
            $table->integer('radar_recul')->unsigned()->default(0);
            $table->integer('camera_recul')->unsigned()->default(0);
            $table->integer('vitreselec')->unsigned()->default(0);
            $table->integer('abs')->unsigned()->default(0);
            $table->integer('eps')->unsigned()->default(0);
            $table->integer('rv')->unsigned()->default(0);
            $table->integer('lv')->unsigned()->default(0);
            $table->integer('cd')->unsigned()->default(0);
            $table->integer('ordinateur')->unsigned()->default(0);
            $table->integer('verrouillage')->unsigned()->default(0);
            $table->integer('double_toit_ouvrant')->unsigned()->default(0);
            $table->integer('active')->unsigned()->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
