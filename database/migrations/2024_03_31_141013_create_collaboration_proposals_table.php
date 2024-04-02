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
        Schema::create('collaboration_proposals', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');
            $table->string('title');
            $table->text('description');
            $table->dateTime('collab_start_date');
            $table->dateTime('collab_end_date');
            $table->string('collab_type');
            // $table->string('category');
            $table->string('duration')->nullable();
            $table->string('compensation')->nullable();
            $table->decimal('compensation_amount', 10, 2)->nullable();
            $table->string('cost')->nullable();
            $table->text('objectives');
            $table->text('ideal_collaborators')->nullable();
            $table->text('proposal');
            $table->text('responsibility')->nullable();
            $table->text('planning')->nullable();
            $table->text('operations_and_sales')->nullable();
            $table->text('marketing')->nullable();
            $table->text('economic_agreements')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->text('observations')->nullable();
            $table->string('public_or_private');
            $table->boolean('collab_limit')->nullable();
            $table->integer('limit')->nullable();
            $table->dateTime('ad_start_date');
            $table->dateTime('ad_end_date');
            $table->boolean('send_notification')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('collaboration_proposals', function (Blueprint $table) {
        //     $table->dropForeign(['user_id']);
        //     // $table->dropForeign(['category_id']);
        // });
        Schema::dropIfExists('collaboration_proposals');
    }
};
