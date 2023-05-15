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
        Schema::create('register_license_detail', function (Blueprint $table) {
            $table->increments('detail_internal_id');
            $table->string('lincense_id');
            $table->enum('license_type', ['FULL', 'TRIAL']);
            $table->string('license_number')->unique();
            $table->date('date_license_number_primary_generated');
            $table->string('license_number_pairing');
            $table->date('license_active_until');
            $table->enum('license_status', ['ACTIVE','INACTIVE']);
            $table->string('processor_sn');
            $table->string('harddisk_sn');
            $table->string('mobo_sn');
            $table->string('device_sn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_license_detail');
    }
};
