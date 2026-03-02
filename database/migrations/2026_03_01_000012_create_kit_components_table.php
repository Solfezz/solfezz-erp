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
        Schema::create('kit_components', function (Blueprint $table) {
             $table->id();
            $table->foreignId('kit_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->enum('component_type', [
                'warehouse_item',
                'kit'
            ]);
            $table->foreignId('warehouse_item_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('component_kit_id')
                ->nullable()
                ->constrained('kits')
                ->nullOnDelete();
            $table->unsignedInteger('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kit_components');
    }
};
