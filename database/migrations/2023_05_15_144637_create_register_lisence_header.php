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
        Schema::create('register_lisence_header', function (Blueprint $table) {
            $table->increments('internal_id');
            $table->string('register_id')->unique();
            $table->date('date_of_filling');
            $table->string('po_id');
            $table->string('client_id');
            $table->string('variant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_lisence_header');
    }
};
