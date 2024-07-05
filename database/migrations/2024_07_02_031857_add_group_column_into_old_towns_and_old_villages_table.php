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
        Schema::table('old_towns', function (Blueprint $table) {
            $table->string('group', 2)->nullable()->after('id');
        });

        Schema::table('old_villages', function (Blueprint $table) {
            $table->string('group', 2)->nullable()->after('id');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('old_towns', function (Blueprint $table) {
            $table->dropColumn('group');
        });

        Schema::table('old_villages', function (Blueprint $table) {
            $table->dropColumn('group');
        });
    }
};
