<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('ab_client_invoices', function (Blueprint $table) {
            $table->decimal('exchange_rate', 8, 2)->default(1);
            $table->unsignedBigInteger('ab_currency_id')->nullable()->after('id');
            $table->foreign('ab_currency_id')->references('id')->on('ab_currencies')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('ab_client_invoices', function (Blueprint $table) {
            $table->dropColumn('exchange_rate');
            $table->dropForeign(['ab_currency_id']);
            $table->dropColumn('ab_currency_id');
        });
    }
};
