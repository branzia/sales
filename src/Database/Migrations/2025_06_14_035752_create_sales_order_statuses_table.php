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
        Schema::create('sales_order_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();  // e.g., 'awaiting_shipment'
            $table->string('label');           // e.g., 'Awaiting Shipment'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_order_statuses');
    }
};
