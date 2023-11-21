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

        $table_menu = DB::table('table_menu')->get();

        return view('user.master', compact('table_config_images','table_menu'));
    }




}
