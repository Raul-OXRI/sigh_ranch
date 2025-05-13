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

        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change(); // Revierte el cambio a nullable
            $table->dropColumn('last_name');                   // Elimina el campo añadido
            $table->dropColumn('username');
        });
    }
};
