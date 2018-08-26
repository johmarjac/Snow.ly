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
            $table->string('user')->default('admin');
            $table->text('password');
            $table->string('github_username')->default('jonekcode');
            $table->string('theme')->default('default.css');
            $table->text('about_content');
            $table->string('page_name')->default('Snow.ly');
            $table->string('hidden_sections')->default('');
        });

        DB::table('settings')->insert(
        [
            'password' => Hash::make("snow.ly"),
            'about_content' =>
            '<h4>Introduction</h4>
            <p>-</p>
            <hr>
            <h4>Skills</h4>
            <p>-</p>
            <hr>
            <h4>Experience</h4>
            <p>-</p>
            <hr>
            <h4>Personal Details</h4>
            <p>-</p>'
        ]);
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
