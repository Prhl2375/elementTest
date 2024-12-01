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
            $table->boolean('active')->default(true)->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('poster');
            $table->string('trailer')->nullable();
            $table->date('release_year')->index();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->index(['start_date', 'end_date']);
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
