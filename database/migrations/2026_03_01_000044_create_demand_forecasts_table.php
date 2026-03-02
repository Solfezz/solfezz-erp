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
        Schema::create('demand_forecasts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_item_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->enum('period_type', [
                'monthly',
                'quarterly'
            ]);
            $table->date('period_start');
            $table->date('period_end');
            $table->unsignedInteger('actual_demand')
                ->default(0);
            $table->unsignedInteger('forecast_demand')
                ->default(0);
            $table->decimal('average_daily_demand', 8, 2)
                ->default(0);
            $table->decimal('peak_daily_demand', 8, 2)
                ->default(0);
            $table->decimal('variance', 8, 2)
                ->default(0);
            $table->timestamp('calculated_at')->nullable();
            $table->timestamps();

            $table->unique(
                ['warehouse_item_id', 'period_type', 'period_start'],
                'df_item_period_unique'
            );
            $table->index('period_type');
            $table->index('period_start');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demand_forecasts');
    }
};
