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
        $table->integer('release_year')->nullable()->change(); // Allow NULL values
    });
}

public function down()
{
    Schema::table('albums', function (Blueprint $table) {
        $table->integer('release_year')->nullable(false)->change(); // Disallow NULL values
    });
}

};
