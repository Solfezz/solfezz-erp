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
        Schema::create('kit_brands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kit_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('brand_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->decimal('selling_price', 10, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamp('listed_at')->nullable();
            $table->unique(['kit_id', 'brand_id']);
            $table->index('brand_id');
            $table->index('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kit_brands');
    }
};
