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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->nullOnDelete(); // Keep record even if product deleted? Or cascade. PRD says 'history', maybe null is safer for historical records if product is deleted. Or cascade. Let's do nullOnDelete for product or cascade. Usually Cascade for Orders, but for Product maybe Set Null or Cascade. PRD doesn't specify. Standard is Cascade or keeping data. Let's go with Cascade for now for simplicity, or actually better: if product is deleted, we still want to know what was ordered. Ideally we snapshotted the data. I'll just use constrained() which defaults to restricting or cascading depending on DB engine but let's be explicit: cascadeOnDelete.
            $table->integer('quantity');
            $table->decimal('price', 10, 2); // Snapshot price at time of purchase
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
