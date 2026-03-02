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
        Schema::create('product_design_iterations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_design_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->unsignedInteger('iteration_number');
            $table->text('notes')->nullable();
            $table->enum('status', [
                'in_progress',
                'passed',
                'failed'
            ])->default('in_progress');
            $table->foreignId('tested_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->timestamp('tested_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_design_iterations');
    }
};
