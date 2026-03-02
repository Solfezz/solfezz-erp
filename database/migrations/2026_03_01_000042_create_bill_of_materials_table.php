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
        Schema::create('bill_of_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_item_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('material_id')
                ->constrained()
                ->restrictOnDelete();
            $table->decimal('quantity_required', 10, 4);
            $table->timestamps();

            $table->unique([
                'warehouse_item_id',
                'material_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_of_materials');
    }
};
