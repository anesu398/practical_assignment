<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('section'); // e.g., 'hero', 'about', 'features'
            $table->string('key'); // e.g., 'title', 'description', 'image'
            $table->text('value')->nullable(); // The actual content (text or image path)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
