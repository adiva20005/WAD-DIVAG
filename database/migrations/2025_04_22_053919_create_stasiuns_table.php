<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('stasiuns', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('country', 100);
            $table->integer('year_built')->nullable();
            $table->boolean('is_active')->default(true);
            $table->text('haunted_story')->nullable();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('stasiun');
    }
};
