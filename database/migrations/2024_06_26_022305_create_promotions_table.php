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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('promo_code')->unique();
            $table->text('contents')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('promotion_type', ['discount', 'gift', 'free_shipping']);
            $table->decimal('promotion_value', 8, 2)->nullable(); // Adjust precision and scale as needed
            $table->text('conditions')->nullable();
            $table->enum('status', ['active', 'inactive', 'expired']);
            $table->string('url')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
