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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');
            $table->decimal('movie_cost', 15, 2)->nullable();
            $table->decimal('earning', 15, 2);
            $table->string('movie_description')->nullable();
            $table->integer('movie_length');
            $table->string('genre');
            $table->string('poster');
            $table->foreignId('producer_id')->constrained('producers');
            $table->foreignId('director_id')->constrained('directors');
            $table->foreignId('production_company_id')->constrained('production_companies');






            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
