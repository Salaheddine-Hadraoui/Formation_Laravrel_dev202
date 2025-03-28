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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug');
            $table->enum('language',['en','ar','fr']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::create('posts',function (Blueprint $table){
            $table->dropColumn('slug');
            $table->dropColumn('language');
        });
    }
};
