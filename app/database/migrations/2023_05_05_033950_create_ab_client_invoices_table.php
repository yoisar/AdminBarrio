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
        Schema::create('ab_client_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ab_client_id');
            $table->date('date');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
            $table->foreign('ab_client_id')->references('id')->on('ab_clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ab_client_invoices');
    }
};
