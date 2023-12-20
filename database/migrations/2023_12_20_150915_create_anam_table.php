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
        Schema::create('anam', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',50)->default('Anam Khan');
            $table->string('number',15)->default('+8801555454');
            $table->string('city',50)->default('Your City Name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anam');
    }
};
