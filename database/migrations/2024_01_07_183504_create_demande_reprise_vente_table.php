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
        Schema::dropIfExists('demande_reprise_vente');
        Schema::create('demande_reprise_vente', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id')->unsigned();
            $table->integer('model_id')->unsigned();
            $table->integer('ville_id')->unsigned();
            $table->string('year');
            $table->string('km');
            $table->string('fuel');
            $table->string('box');
            $table->string('origine');
            $table->string('name');
            $table->string('phone');
            $table->string('img_avent');
            $table->string('img_derriere');
            $table->foreign('brand_id')->references('id')->on("brands");
            $table->foreign('model_id')->references('id')->on("models");
            $table->foreign('ville_id')->references('id')->on("ville");
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
        Schema::dropIfExists('demande_reprise_vente');
    }
};
