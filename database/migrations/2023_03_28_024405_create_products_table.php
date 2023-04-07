<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('products', function(Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->integer('stock')->default(0);
            $table->decimal('sell_price', 12, 2);
            $table->mediumText('short_description');
            $table->longText('long_description');
            $table->enum('state', ['NEW', 'LIKE NEW', 'USED']);
            $table->enum('status', ['ACTIVE', 'DEACTIVATE'])->default('ACTIVE');
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('products');
    }
};
