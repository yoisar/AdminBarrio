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
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->float('latitude', 10, 6);
            $table->float('longitude', 10, 6);
            $table->text('description');
            $table->float('price');
            $table->string('currency');
            $table->enum('status', ['available', 'unavailable']);
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
