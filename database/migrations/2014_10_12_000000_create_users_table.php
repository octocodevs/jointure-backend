<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('position');
            $table->string('profile_type');
            $table->string('country')->nullable();
            $table->string('business_name');
            $table->string('subscription_type')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // // Eliminar la tabla users
        // Schema::dropIfExists('users');

        // // Volver a activar verificación de claves foráneas
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }


    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
