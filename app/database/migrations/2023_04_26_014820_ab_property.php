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
        Schema::create('ab_properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->float('latitude', 10, 6);
            $table->float('longitude', 10, 6);
            $table->smallInteger('bedrooms');
            $table->smallInteger('bathrooms');
            $table->text('description');
            $table->string('currency')->default('ARS');
            $table->float('exchange_rate')->default(1);
            $table->double('sale_price', 15, 3);
            $table->double('rent_price', 15, 3)->default(0);
            $table->double('square_meters', 6, 2)->default(0);
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('ab_property_type_id')->constrained();
            $table->foreignId('ab_neighborhood_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ab_properties');
    }
};
