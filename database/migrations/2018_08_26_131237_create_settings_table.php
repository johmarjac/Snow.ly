<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
        Schema::create('settings', function (Blueprint $table)
        {
            $table->string('name')->default('Bob Snowlyski');
            $table->string('user')->primary();
            $table->text('password');
            $table->string('github_username')->default('jonekcode');
            $table->string('theme')->default('default.css');
            $table->text('about_content');
            $table->string('page_name')->default('Snow.ly');
            $table->string('hidden_sections')->default('');
            $table->string('avatar_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
         Schema::dropIfExists('settings');
     }
}
