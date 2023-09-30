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
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
            $table->string('name');
            $table->string('email');
            $table->string('phone', 20);
            $table->softDeletes();
>>>>>>> 1147288 (refactor: remoção de comentários)
            $table->string('name');
            $table->string('email');
            $table->string('phone', 20);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletters');
    }
};
