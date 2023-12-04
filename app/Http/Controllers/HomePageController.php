<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BannerAdsRepository;
use App\Http\Services\UploadService;
use App\Models\Blog;
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

        return view('web.home.trangchu', compact('table_config_images', 'table_menu', 'slide_banner', 'img_slider', 'gallery_items', 'pbgn_partner'));
    }

    public function indexAboutUs()
    {

        $pbgn_partner = DB::table('banner_ads')
            ->where('status', '=', 'active')
            ->where('code_ads', '=', 'pbgn-partner')
            ->get();

        $about_us_mission = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'about-us-mission')
            ->get();

        $about_us_image = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'about-us-image')
            ->first();

        $history_content_box = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'history_content_box')
            ->first();

        $box_banner_sohoa = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'box-banner-sohoa')
            ->first();

        return view('web.aboutus.abouts', compact('pbgn_partner', 'about_us_mission', 'about_us_image', 'history_content_box', 'box_banner_sohoa'));
    }

    public function listCategory()
    {

        $listCategory = DB::table('category')
            ->where('status', '=', 'active')
            ->get();

        $list_blog = DB::table('blogs')
            ->join('category', 'blogs.category_id', '=', 'category.id')
            ->where('blogs.status', '=', 'active')
            ->orderBy('blogs.created_at', 'desc')
            ->get();

        return view('web.news.category', compact('listCategory', 'list_blog'));
    }

    public function detailBlog($id)
    {

        $blog = Blog::find($id);

        if (!$blog) {
            abort(404); // Hoặc thực hiện xử lý khi không tìm thấy
        }

        $list_blog = DB::table('blogs')
            ->join('category', 'blogs.category_id', '=', 'category.id')
            ->where('blogs.status', '=', 'active')
            ->inRandomOrder() // Thay đổi từ orderBy thành inRandomOrder
            ->get();

        return view('web.news.details', ['blog' => $blog, 'list_blog' => $list_blog]);
    }

}
