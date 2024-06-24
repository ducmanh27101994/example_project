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
        $configOptionGlobal = DB::table('config_option')->where('status', '=', 'active')->pluck('slug')->toArray();

        $modal_image = DB::table('banner_ads')->where('status', '=', 'active')->where('code_ads', '=', 'modal-image')->get();

        $products_hot = DB::table('products')
            ->where('status', '=', 'active')
            ->where('interface_type', '!=', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $content_products = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'banner-san-pham')
            ->get();

        $chinh_sach_bao_hanh = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'bao-hanh')
            ->get();

        $tin_san_pham_top = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'tin-san-pham-top')
            ->get();

        $tin_san_pham_center = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'tin-san-pham-center')
            ->get();

        $tin_san_pham_bottom = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'tin-san-pham-bottom')
            ->get();

        $category_footer = DB::table('cate_product')
            ->where('status', '=', 'active')
            ->orderBy('chkstt', 'asc')
            ->get();

        $social = DB::table('social')->first();

        view()->composer('*', function ($view) use ($table_menu, $table_config_images, $configOptionGlobal, $modal_image, $products_hot, $content_products, $chinh_sach_bao_hanh, $tin_san_pham_top, $tin_san_pham_center, $tin_san_pham_bottom, $category_footer, $social) {
            $view->with('table_menu', $table_menu)
                ->with('table_config_images', $table_config_images)
                ->with('configOptionGlobal', $configOptionGlobal)
                ->with('modal_image', $modal_image)
                ->with('products_hot', $products_hot)
                ->with('content_products', $content_products)
                ->with('chinh_sach_bao_hanh', $chinh_sach_bao_hanh)
                ->with('tin_san_pham_top', $tin_san_pham_top)
                ->with('tin_san_pham_center', $tin_san_pham_center)
                ->with('tin_san_pham_bottom', $tin_san_pham_bottom)
                ->with('category_footer', $category_footer)
                ->with('social', $social);
        });
    }
}
