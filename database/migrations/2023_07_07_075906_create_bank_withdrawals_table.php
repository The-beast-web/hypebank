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
        Schema::create('bank_withdrawals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('amount');
            $table->string('account_no');
            $table->string('account_name');
            $table->string('bank');
            $table->string('account_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_withdrawals');
    }
};
