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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("mark");
            $table->string("year");
            $table->integer("price");
            $table->integer("km_riding");
            $table->date("apk");
            $table->enum("fuel_type", ['diesel', 'benzine', 'electric', 'hybrid']);
            $table->json('image_urls');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
