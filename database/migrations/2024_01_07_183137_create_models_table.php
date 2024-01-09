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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id')->unsigned();
            $table->string('name');
            $table->string("image");
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->foreign('brand_id')->references('id')->on("brands");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
