<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ab_client_payments', function (Blueprint $table) {
            $table->unsignedBigInteger('ab_currency_id')->nullable();
            $table->decimal('exchange_rate', 8, 2)->nullable();
        });

        Schema::table('ab_client_debts', function (Blueprint $table) {
            $table->unsignedBigInteger('ab_currency_id')->nullable();
            $table->decimal('exchange_rate', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ab_client_payments', function (Blueprint $table) {
            $table->dropColumn('ab_currency_id');
            $table->dropColumn('exchange_rate');
        });

        Schema::table('ab_client_debts', function (Blueprint $table) {
            $table->dropColumn('ab_currency_id');
            $table->dropColumn('exchange_rate');
        });
    }
};
