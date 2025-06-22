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
        Schema::create('sales_order_status_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('sales_orders')->onDelete('cascade');
            $table->string('status'); // e.g., pending, processing, complete
            $table->text('comment')->nullable();
            $table->boolean('is_customer_notified')->default(false);
            $table->string('changed_by')->nullable(); // 'admin', 'customer', 'system', etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_order_status_histories');
    }
};
