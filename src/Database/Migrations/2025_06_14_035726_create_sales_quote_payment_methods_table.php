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
        Schema::create('sales_quote_payment_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')->constrained('sales_quotes')->onDelete('cascade');
            $table->string('method_code'); // e.g., 'stripe', 'paypal'
            $table->string('label');       // e.g., 'Stripe Credit Card'
            $table->boolean('is_selected')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_quote_payment_methods');
    }
};
