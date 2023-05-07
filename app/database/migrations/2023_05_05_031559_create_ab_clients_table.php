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
        Schema::create('ab_clients', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('document_type');
            $table->string('document_number');
            $table->string('nationality');
            $table->string('address');
            $table->string('phone');
            $table->string('billing_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('tax_responsibility')->nullable();
            $table->foreignId('ab_city_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ab_clients');
    }
};
