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
        Schema::create('collaboration', function (Blueprint $table) {
            $table->id();
            $table-> string('title');
            $table-> string('description');
            $table-> date('collab_start_date');
            $table-> date('collab_end_date');
            $table-> string('collab_type');
            $table->string('category');
            $table->string('duration');
            $table->string('compensation');
            $table->decimal('compensation_amount', 10, 2);
            $table->string('cost');
            $table->string('objectives');
            $table->string('ideal_collaborators');
            $table->string('proposal');
            $table->string('responsibility');
            $table->string('planning');
            $table->string('operations_and_sales');
            $table->string('marketing');
            $table->string('economic_agreements');
            $table->string('terms_and_conditions');
            $table->string('observations');
            $table->string('collab_limit');
            $table->string('limit');
            $table->date('ad_start_date');//??
            $table->date('ad_end_date'); //??
            $table->boolean('send notification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaboration');
    }
};
