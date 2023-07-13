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
        //
        Schema::table('cards', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('card_number');
            $table->integer('cvv');
            $table->string('card_expiry');
            $table->integer('card_pin');
            $table->string('card_type');
            $table->string('card_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
