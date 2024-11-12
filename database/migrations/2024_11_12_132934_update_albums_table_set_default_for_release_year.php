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
    Schema::table('albums', function (Blueprint $table) {
        $table->integer('release_year')->default(2024)->change(); // Set default to 2024
    });
}

public function down()
{
    Schema::table('albums', function (Blueprint $table) {
        $table->integer('release_year')->nullable(false)->change(); // Remove default value
    });
}

};
