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
        Schema::create('update_detail', function (Blueprint $table) {
            $table->increments('detail_internal_id');
            $table->string('update_id');
            $table->string('query_ges');
            $table->string('query_gsl');
            $table->string('query_gacc');
            $table->string('query_gii');
            $table->string('dll');
            $table->string('rpt');
            $table->string('rdl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_detail');
    }
};
