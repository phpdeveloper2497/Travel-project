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
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->json('short_description')->nullable();
            $table->json('days')->nullable();
            $table->json('season')->nullable();
            $table->json('from_to')->nullable();
            $table->json('area')->nullable();
            $table->integer('price')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sort_order')->nullable();
            $table->integer('status')->default(1);
            $table->boolean('banner')->default(false);
            $table->boolean('top')->default(false);
            $table->boolean('discount')->default(false);
            $table->integer('discount_amount')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
