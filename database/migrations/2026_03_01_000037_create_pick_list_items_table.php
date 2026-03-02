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
        Schema::create('pick_list_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pick_list_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('warehouse_item_id')
                ->constrained()
                ->restrictOnDelete();
            $table->foreignId('location_id')
                ->nullable()
                ->constrained('warehouse_locations')
                ->nullOnDelete();
            $table->unsignedInteger('quantity_required');
            $table->unsignedInteger('quantity_picked')
                ->default(0);
            $table->enum('status', [
                'pending',
                'picked',
                'short'
            ])->default('pending');
            $table->foreignId('picked_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->timestamp('picked_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pick_list_items');
    }
};
