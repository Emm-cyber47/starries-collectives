<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->text('shippingaddress');
            $table->string('garment');
            $table->string('style');
            $table->string('fabric');
            $table->string('color');
            $table->text('measurement'); // Store as JSON if needed
            $table->text('specialrequest')->nullable();
            $table->date('date');
            $table->decimal('budget', 10, 2);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurements');
    }
};
