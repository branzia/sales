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
        Schema::create('sales_quote_shipping_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')->constrained('sales_quotes')->onDelete('cascade');
            $table->string('carrier_code'); // e.g., 'fedex'
            $table->string('method_code');  // e.g., 'overnight'
            $table->string('label');        // e.g., 'FedEx Overnight'
            $table->decimal('price', 12, 2);
            $table->boolean('is_selected')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_quote_shipping_methods');
    }
};
