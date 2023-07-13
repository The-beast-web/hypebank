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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('tran_id');
            $table->string('amount');
            $table->string('withdrawal_method');
            $table->string('bank_withdraw_id');
            $table->string('card_withdraw_id');
            $table->string('paypal_withdraw_id');
            $table->string('status');
            $table->string('kyc_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};
