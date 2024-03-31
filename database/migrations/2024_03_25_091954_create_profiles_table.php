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
        Schema::create('profiles', function (Blueprint $table) {
            // $table->uuid('user_id')->primary();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->primary();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('image');
            $table->string('CIF');
            $table->string('legal_structure');
            $table->string('phone_number')->nullable();
            $table->string('email_contact')->nullable();
            $table->string('sector');
            $table->string('activity')->nullable();
            $table->string('offer')->nullable();
            $table->string('values')->nullable();
            $table->string('business_size');
            $table->string('market')->nullable();
            $table->string('clients');
            $table->string('sales_channels');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
