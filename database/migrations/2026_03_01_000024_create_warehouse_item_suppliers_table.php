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
        Schema::create('warehouse_item_suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_item_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('supplier_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('supplier_sku')->nullable();
            $table->decimal('cost_price', 10, 2);
            $table->unsignedInteger('minimum_order_quantity')
                ->default(1);
            $table->unsignedInteger('lead_time_days')
                ->default(7);
            $table->boolean('is_preferred')->default(false);
            $table->timestamps();

            $table->unique([
                'warehouse_item_id',
                'supplier_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse_item_suppliers');
    }
};
