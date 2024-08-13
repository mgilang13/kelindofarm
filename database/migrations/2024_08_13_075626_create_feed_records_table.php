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
        Schema::create('feed_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id')->constrained('animals')->onDelete('cascade');
            $table->date('feed_date');
            $table->string('feed_type');
            $table->decimal('quantity', 8, 2);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_records');
    }
};
