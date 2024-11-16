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
        Schema::create('sentences', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->integer('row')->nullable();
            $table->integer('column')->nullable();
            $table->string('color')->default('#000000');
            $table->string('styling')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sentences');
    }
};
