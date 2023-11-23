<?php
namespace App\Http\Controllers;

use App\Http\Repositories\BannerAdsRepository;
use App\Http\Services\UploadService;
use Illuminate\Support\Facades\DB;


class HomePageController extends BaseController
{
    public function __construct(BannerAdsRepository $bannerAdsRepository)
    {
        $this->bannerAdsRepository = $bannerAdsRepository;
    }

    public function indexHomePage()
    {

        $table_config_images = DB::table('table_config_images')->first();

        $table_menu = DB::table('table_menu')->where('status', '=', 'active')->get();

        $slide_banner = DB::table('banner_ads')
            ->where('status', '=', 'active')
            ->where('code_ads', '=', 'SlideBanner')
            ->get();

        $img_slider = DB::table('banner_ads')
            ->where('status', '=', 'active')
            ->where('code_ads', '=', 'img_slider')
            ->get();

        $gallery_items = DB::table('banner_ads')
            ->where('status', '=', 'active')
            ->where('code_ads', '=', 'gallery-items')
            ->get();

        $pbgn_partner = DB::table('banner_ads')
            ->where('status', '=', 'active')
            ->where('code_ads', '=', 'pbgn-partner')
            ->get();

        return view('web.index', compact('table_config_images','table_menu','slide_banner','img_slider','gallery_items','pbgn_partner'));
    }

}
