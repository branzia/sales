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
        Schema::create('sales_quote_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')->nullable()->constrained('sales_quotes')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('sku');
            $table->string('name');
            $table->decimal('price', 12, 2);
            $table->unsignedInteger('qty_ordered');
            $table->decimal('discount', 12, 2)->default(0);
            $table->decimal('tax', 12, 2)->default(0);
            $table->json('custom_options')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_quote_items');
    }
};
