<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BannerAdsRepository;
use App\Http\Services\Import;
use App\Http\Services\UploadService;
use App\Models\Blog;
use App\Models\CateProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomePageController extends BaseController
{
    protected $import;

    public function __construct(BannerAdsRepository $bannerAdsRepository, Import $import)
    {
        $this->bannerAdsRepository = $bannerAdsRepository;
        $this->import = $import;
    }

    public function indexHomePage()
    {

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

        $products = DB::table('products')
            ->where('status', '=', 'active')
            ->orderBy('created_at', 'desc')
            ->get();


        return view('web.home.trangchu', compact('slide_banner', 'img_slider', 'gallery_items', 'pbgn_partner', 'products'));
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

    public function listCategory(Request $request)
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

    public function detailBlog($slug)
    {

        $blog = Blog::where('slug', $slug)->firstOrFail();

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

    public function listCategoryDetail($id)
    {


        $listCategory = DB::table('category')
            ->where('status', '=', 'active')
            ->get();

        $list_blog = DB::table('blogs')
            ->join('category', 'blogs.category_id', '=', 'category.id')
            ->where('category.id', '=', $id)
            ->where('blogs.status', '=', 'active')
            ->orderBy('blogs.created_at', 'desc')
            ->get();

        return view('web.news.category', compact('listCategory', 'list_blog'));
    }

    public function importStore(Request $request)
    {
        if (!$request->hasFile('upload_file')) {
            $response = [
                'status' => 400,
                'message' => "Không tìm thấy file"
            ];
            return response()->json($response);
        } else {
            $file = $request->upload_file;
            $sheetData = $this->import->get_data_import($file);

            $listFail = [];

            foreach ($sheetData as $key => $value) {
                if (empty($value[0]) && empty($value[1]) && empty($value[2]) && empty($value[3])) continue;
                if ($key >= 1) {
                    $data = array(
                        "key" => ++$key,
                        "email" => !empty($value[0]) ? (trim($value[0])) : "",
                        "phone" => !empty($value[1]) ? (trim($value[1])) : "",
                        "full_name" => !empty($value[2]) ? (trim($value[2])) : "",
                        "cmt" => !empty($value[3]) ? (trim($value[3])) : "",
                    );

                    //create data

                }
            }
            $response = [
                'status' => 200,
                'message' => 'success',
            ];
            return response()->json($response);
        }
    }

    public function detailsBasic($id)
    {
        $product = DB::table('products')
            ->where('id', '=', $id)
            ->first();

        $feature_description = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'feature_description')
            ->get();

        $vehicle_detail_photos = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'vehicle_detail_photos')
            ->get();

        $actual_photo = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'actual_photo')
            ->get();

        $icon_images = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'icon_images')
            ->get();

        $color_image = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'color_image')
            ->get();


        return view('web.product.detailsBasic', compact('color_image', 'icon_images', 'product', 'feature_description', 'vehicle_detail_photos', 'actual_photo'));
    }

    public function categoryProduct()
    {
        $category = CateProduct::all();

        if (!empty($category)){
            $products = DB::table('products')
                ->where('status', '=', 'active')
                ->where('product_portfolio','=', $category[0]->id)
                ->orderBy('created_at','desc')
                ->get();
        }

        $blog1 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct','=', 2)
            ->orderBy('created_at','desc')
            ->get();

        $blog2 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct','=', 3)
            ->orderBy('created_at','desc')
            ->get();

        $blog3 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct','=', 4)
            ->orderBy('created_at','desc')
            ->get();

        return view('web.product.category', compact('category','products','blog1','blog2','blog3'));
    }

    public function detailCategoryProduct($id)
    {
        $category = CateProduct::all();

        $products = DB::table('products')
            ->where('status', '=', 'active')
            ->where('product_portfolio','=', $id)
            ->orderBy('created_at','desc')
            ->get();

        $blog1 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct','=', 2)
            ->orderBy('created_at','desc')
            ->get();

        $blog2 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct','=', 3)
            ->orderBy('created_at','desc')
            ->get();

        $blog3 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct','=', 4)
            ->orderBy('created_at','desc')
            ->get();

        return view('web.product.category', compact('category','products','blog1','blog2','blog3'));
    }


}
