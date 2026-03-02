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
        Schema::create('inventory', function (Blueprint $table) {
               $table->id();
                $table->foreignId('warehouse_item_id')
                    ->constrained()
                    ->cascadeOnDelete();
                $table->foreignId('warehouse_id')
                    ->constrained()
                    ->cascadeOnDelete();
                $table->foreignId('location_id')
                    ->nullable()
                    ->constrained('warehouse_locations')
                    ->nullOnDelete();
                $table->unsignedInteger('quantity_on_hand')
                    ->default(0);
                $table->unsignedInteger('quantity_reserved')
                    ->default(0);
                $table->unsignedInteger('quantity_available')
                    ->default(0);
                $table->unsignedInteger('safety_stock')
                    ->default(0);
                $table->unsignedInteger('reorder_point')
                    ->default(0);
                $table->unsignedInteger('reorder_quantity')
                    ->default(0);
                $table->unique([
                    'warehouse_item_id',
                    'warehouse_id'
                ]);
                $table->index('quantity_available');
                $table->index('reorder_point');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
