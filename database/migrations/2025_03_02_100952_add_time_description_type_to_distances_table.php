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
        Schema::table('distances', function (Blueprint $table) {
            $table->time('time')->after('date'); // Add time column after date
            $table->text('description')->nullable()->after('distance'); // Add description after distance
            $table->string('type')->nullable()->after('description'); // Add type after description
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('distances', function (Blueprint $table) {
            $table->dropColumn(['time', 'description', 'type']); // Remove added columns
        });
    }
};
