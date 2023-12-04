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

        view()->composer('*', function ($view) use ($table_menu) {
            $view->with('table_menu', $table_menu);
        });
    }
}
