<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('description')->nullable();
            $table->json('short_description')->nullable();
            $table->json('days')->nullable();
            $table->json('season')->nullable();
            $table->json('from_to')->nullable();
            $table->json('area')->nullable();
            $table->integer('price')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sort_order')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
