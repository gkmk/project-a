<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('activity_user', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Activity::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->unsignedTinyInteger('skill_level')->nullable();
            $table->unsignedTinyInteger('days_available')->nullable();
            $table->unsignedTinyInteger('time_available')->nullable();
            $table->index(['activity_id', 'skill_level', 'days_available', 'time_available']);
            $table->unique(['user_id', 'activity_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
        Schema::dropIfExists('activity_user');
    }
};
