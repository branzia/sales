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
        Schema::create('sales_order_state_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained('sales_order_states')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('sales_order_statuses')->onDelete('cascade');
            $table->boolean('is_default')->default(false); // is this the default status for this state?
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_order_state_status');
    }
};
