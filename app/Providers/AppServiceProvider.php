<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!env('APP_KEY') == null)
            return false;
        
        $settings = DB::table('settings')->get()->first();

        if($settings)
        {        
            $sections = array();
            foreach (explode(',', $settings->hidden_sections) as $section)
            {
                $sections[$section] = true;
            }

            $settings->hidden_sections = $sections;

            View::share('settings', $settings);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
