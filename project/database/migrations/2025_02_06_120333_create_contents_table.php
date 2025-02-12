<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('contents', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }



    public function up()
{
    Schema::create('contents', function (Blueprint $table) {
        $table->id();
        $table->string('page'); // Stores the page name (e.g., "about", "news")
        $table->string('section'); // Identifies the section (e.g., "header", "main")
        $table->string('title')->nullable();
        $table->text('body')->nullable();
        $table->string('image')->nullable();
        $table->boolean('is_published')->default(1);
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
