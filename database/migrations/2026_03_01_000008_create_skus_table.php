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
        Schema::create('skus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_design_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->string('sku_code')->unique();
            $table->string('name');
            $table->enum('type', ['single', 'kit'])
                ->default('single');
            $table->decimal('selling_price', 10, 2)
                ->default(0);
            $table->enum('status', [
                'draft', 'active', 'discontinued'
            ])->default('draft');
            $table->timestamps();

            $table->index('sku_code');
            $table->index('type');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skus');
    }
};
