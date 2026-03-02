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
        Schema::create('order_item_consumption', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_item_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('warehouse_item_id')
                ->constrained()
                ->restrictOnDelete();
            $table->unsignedInteger('quantity_consumed');
            $table->timestamps();

            $table->index('order_item_id');
            $table->index('warehouse_item_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item_consumption');
    }
};
