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
        Schema::create('tlb_data_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_code');
            $table->string('plan_name');
            $table->string('plan_price');
            $table->string('network_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tlb_data_plans');
    }
};
