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
        Schema::create('kit_hierarchy', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ancestor_kit_id')
                ->constrained('kits')
                ->cascadeOnDelete();
            $table->foreignId('descendant_kit_id')
                ->constrained('kits')
                ->cascadeOnDelete();
            $table->unsignedInteger('depth')->default(0);
            $table->timestamps();

            $table->unique([
                'ancestor_kit_id',
                'descendant_kit_id'
            ]);
            $table->index('ancestor_kit_id');
            $table->index('descendant_kit_id');
            $table->index('depth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kit_hierarchy');
    }
};
