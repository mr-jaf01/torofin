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
        Schema::create('tlb_wallet', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('account_number');
            $table->string('available_bal')->default('0.00');
            $table->string('total_bal')->default('0.00');
            $table->string('reward_bal')->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tlb_wallet');
    }
};
