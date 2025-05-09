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
            // Rimuovo i vecchi campi social
            $table->dropColumn(['linkedin', 'whatsapp']);

            // Aggiungo i nuovi campi social
            $table->string('twitch')->nullable()->after('bio');
            $table->string('github')->nullable()->after('twitch');
            $table->string('discord')->nullable()->after('github');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('linkedin')->nullable();
            $table->string('whatsapp')->nullable();

 
            $table->dropColumn(['twitch', 'github', 'discord']);
        });
    }
};
