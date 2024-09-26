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
        Schema::create('approved_donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donation_request_id');
            $table->string('recipient_name');
            $table->string('food_photo');
            $table->timestamps();
        
            // Definisikan kunci asing dengan nama tabel yang sesuai
            $table->foreign('donation_request_id')
                  ->references('id')->on('donnation__requests')
                  ->onDelete('cascade'); // Harus sama dengan nama tabel yang benar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approved__donations');
    }
};
