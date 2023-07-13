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
        Schema::create('loan_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('monthly_interest');
            $table->string('amount');
            $table->string('min_amount');
            $table->string('emi_type');
            $table->string('tenure');
            $table->string('interest_rates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_packages');
    }
};
