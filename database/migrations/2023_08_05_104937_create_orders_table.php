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
            $table->foreignId('user_id');
            $table->unsignedTinyInteger('payment_type')->nullable()->default(0);
            $table->unsignedTinyInteger('payment_status')->nullable()->default(0);
            $table->decimal('price', 10, 2);
            $table->unsignedTinyInteger('status')->nullable()->default(0);
            $table->foreignId('city_id');
            $table->string('address');
            $table->text('comment')->nullable();
            $table->timestamps();
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
