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
        Schema::create('assembly_order_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assembly_order_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('warehouse_item_id')
                ->constrained()
                ->restrictOnDelete();
            $table->unsignedInteger('quantity_required');
            $table->unsignedInteger('quantity_used')
                ->default(0);
            $table->enum('status', [
                'pending',
                'completed',
                'short'
            ])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assembly_order_components');
    }
};
