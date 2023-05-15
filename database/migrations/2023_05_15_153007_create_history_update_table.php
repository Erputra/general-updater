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
        Schema::create('history_update', function (Blueprint $table) {
            $table->increments('internal_id');
            $table->string('license_number');
            $table->string('update_id');
            $table->date('date_update_created');
            $table->date('date_client_updated');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_update');
    }
};
