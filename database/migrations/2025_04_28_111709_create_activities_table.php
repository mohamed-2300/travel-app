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
    Schema::create('activities', function (Blueprint $table) {
        $table->id();
        $table->string('activity_type'); // e.g., add, modify, delete
        $table->string('entity_type');  // e.g., agency, product
        $table->string('entity_name');  // e.g., the name of the agency or product
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
