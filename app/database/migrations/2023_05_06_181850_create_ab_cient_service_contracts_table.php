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
        Schema::create('ab_cient_service_contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ab_client_id');
            $table->unsignedBigInteger('ab_service_id');
            $table->unsignedBigInteger('ab_currency_id');
            $table->unsignedDecimal('price', 10, 2);
            $table->float('exchange_rate')->default(1);
            $table->integer('payment_day');
            $table->string('contract_number')->unique();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
            $table->foreign('ab_client_id')->references('id')->on('ab_clients')->onDelete('cascade');
            $table->foreign('ab_service_id')->references('id')->on('ab_services')->onDelete('cascade');
            $table->foreign('ab_currency_id')->references('id')->on('ab_currencies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ab_cient_service_contracts');
    }
};
