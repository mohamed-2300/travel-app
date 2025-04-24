<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('duration');
            $table->decimal('price', 10, 2);
            $table->string('departure');
            
            $table->foreignId('agency_id')->constrained('agencies')->onDelete('cascade');

            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->json('itinerary')->nullable();

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->string('whatsapp_number')->nullable();

            $table->json('included')->nullable();
            $table->json('excluded')->nullable();
            $table->json('images')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
