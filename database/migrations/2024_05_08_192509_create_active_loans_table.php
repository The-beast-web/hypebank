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
        Schema::create('active_loans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_id');
            $table->string('request_id');
            $table->string('monthly_interest');
            $table->string('amount');
            $table->string('monthly_payment');
            $table->string('emi_type');
            $table->string('tenure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('active_loans');
    }
};
