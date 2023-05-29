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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->foreignId('user_id')
                ->nullable()
                ->default(null)
                ->constrained('users');
            $table->foreignId('category_id')
                ->nullable()
                ->default(null)
                ->constrained('categories');
            $table->timestamp('deadline')
                ->nullable()
                ->default(null);
            $table->boolean('is_completed')
                ->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
