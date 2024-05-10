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
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name', 70);
            $table->string('last_name', 70);
            $table->string('email');
            $table->string('phone', 50);
            $table->string('gender')->nullable();
            $table->string('dob');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('zipcode');
            $table->string('id_type', 50);
            $table->string('id_front');
            $table->string('id_back');
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kycs');
    }
};
