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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projecttitle')->nullable();
            $table->string('studentname')->nullable();
            $table->string('instructer')->nullable();
            $table->string('othermembers')->nullable();
            $table->string('starteddate')->nullable();
            $table->string('endeddate')->nullable();
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->string('progress')->nullable();
            $table->string('estduration')->nullable();
            $table->string('client')->nullable();
            $table->string('budget')->nullable();
            $table->string('image', 300);
            $table->string('rate');
            $table->string('status')->default('unpublish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
