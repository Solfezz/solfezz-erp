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
        Schema::create('orders', function (Blueprint $table) {
             $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('customer_id')
                ->constrained()
                ->restrictOnDelete();
            $table->foreignId('channel_id')
                ->constrained('listing_channels')
                ->restrictOnDelete();
            $table->string('channel_order_id')->nullable();
            $table->enum('status', [
                'pending',
                'processing',
                'picking',
                'packed',
                'shipped',
                'delivered',
                'cancelled',
                'refunded'
            ])->default('pending');
            $table->enum('priority', [
                'normal',
                'high',
                'urgent'
            ])->default('normal');
            $table->timestamp('promised_ship_date')
                ->nullable();
            $table->decimal('subtotal', 10, 2)
                ->default(0);
            $table->decimal('tax', 10, 2)
                ->default(0);
            $table->decimal('shipping_cost', 10, 2)
                ->default(0);
            $table->decimal('total', 10, 2)
                ->default(0);
            $table->text('notes')->nullable();
            $table->foreignId('assigned_to')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->timestamps();

            $table->index('status');
            $table->index('priority');
            $table->index('order_number');
            $table->index('channel_order_id');
            $table->index('promised_ship_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
