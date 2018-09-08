<?php

use Illuminate\Database\Seeder;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('settings')->insert([
            'name' => 'Bob Snowlyski',
            'user' => config('snowly.admin.name'),
            'password' => \Illuminate\Support\Facades\Hash::make(config('snowly.admin.pass')),
            'about_content' => static::getDefaultAboutContent(),

        ]);
    }

    public static function getDefaultAboutContent()
    {
        return '<h4>Introduction</h4>
                <p>-</p>
                <hr>
                <h4>Skills</h4>
                <p>-</p>
                <hr>
                <h4>Experience</h4>
                <p>-</p>
                <hr>
                <h4>Personal Details</h4>
                <p>-</p>';
    }
}
