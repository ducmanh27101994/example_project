<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $table_menu = DB::table('table_menu')->where('status', '=', 'active')->get();
        $table_config_images = DB::table('table_config_images')->first();
        $configOptionGlobal = DB::table('config_option')->where('status','=','active')->pluck('slug')->toArray();

        view()->composer('*', function ($view) use ($table_menu, $table_config_images,$configOptionGlobal) {
            $view->with('table_menu', $table_menu)
                ->with('table_config_images', $table_config_images)
                ->with('configOptionGlobal', $configOptionGlobal);
        });
    }
}
