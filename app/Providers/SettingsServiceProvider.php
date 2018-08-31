<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Replace with for loop later
        $settings = DB::table('settings')->get()->first();
        config(['snowly.name' => $settings->name]);
        config(['snowly.user' => $settings->user]);
        config(['snowly.avatar_url' => $settings->avatar_url]);
        config(['snowly.password' => $settings->password]);
        config(['snowly.github_username' => $settings->github_username]);
        config(['snowly.theme' => $settings->theme]);
        config(['snowly.about_content' => $settings->about_content]);
        config(['snowly.page_name' => $settings->page_name]);
        config(['snowly.hidden_sections' => $settings->hidden_sections]);

        $sections = array();
        foreach (explode(',', $settings->hidden_sections) as $section)
        {
            $sections[$section] = true;
        }

        config(['snowly.hidden_sections' => $sections]);
    }
}
