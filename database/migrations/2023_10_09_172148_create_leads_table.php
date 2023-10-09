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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('customer_id');
            $table->integer('source')->nullable();
            $table->float('estimated_revenue')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1); // Prospect
            $table->integer('disqualification_reason')->nullable();
            $table->text('disqualification_description')->nullable();
            $table->dateTime('date_disqualified')->nullable();
            $table->dateTime('date_qualified')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('accounts');

            $table->index(['status', 'customer_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
