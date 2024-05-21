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

        $home_page_co2 = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'home_page_co2')
            ->get();

        $pbgn_partner = DB::table('banner_ads')
            ->where('status', '=', 'active')
            ->where('code_ads', '=', 'pbgn-partner')
            ->get();

        $listCategory = DB::table('cate_product')
            ->where('status', '=', 'active')
            ->get();

        $about_us_gt_cl = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'about-us-gt-cl')
            ->get();

        $homepage_counter = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'homepage-counter')
            ->get();

        $homepage_popular_left = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'homepage-popular-left')
            ->get();

        $homepage_popular_right = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'homepage-popular-right')
            ->get();

        $homepage_popular_bottom = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'homepage-popular-bottom')
            ->get();

        $data = [];
        if (!empty($listCategory)) {
            foreach ($listCategory as $value) {
                $key = $value->name;
                $productsCate = DB::table('cate_product')
                    ->join('products', 'cate_product.id', '=', 'products.product_portfolio')
                    ->where('products.product_portfolio', '=', $value->id)
                    ->get();
                $data["$key"] = $productsCate;
            }
        }

        return view('web.home.trangchu', compact('slide_banner', 'img_slider', 'gallery_items', 'home_page_co2', 'pbgn_partner', 'homepage_counter', 'listCategory', 'data', 'about_us_gt_cl', 'homepage_popular_left', 'homepage_popular_right', 'homepage_popular_bottom'));
    }

    public function indexAboutUs()
    {


        $pbgn_partner = DB::table('banner_ads')
            ->where('status', '=', 'active')
            ->where('code_ads', '=', 'pbgn-partner')
            ->get();

        $about_us_video = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'about-us-video')
            ->get();

        $about_us_mission = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'about-us-mission')
            ->get();

        $about_us_tm_sm = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'about-us-tn-sm')
            ->get();

        $about_us_gt_cl = DB::table('independent_content')
            ->where('status', '=', 'active')
            ->where('location', '=', 'about-us-gt-cl')
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

        return view('web.aboutus.abouts', compact('pbgn_partner', 'about_us_mission', 'about_us_tm_sm', 'about_us_gt_cl', 'about_us_video', 'about_us_image', 'history_content_box', 'box_banner_sohoa'));
    }

    public function listCategory(Request $request)
    {

        $listCategory = DB::table('category')
            ->where('status', '=', 'active')
            ->get();

        $list_blog = DB::table('blogs')
            ->leftJoin('category', 'blogs.category_id', '=', 'category.id')
            ->where('blogs.status', '=', 'active')
            ->orderBy('blogs.created_at', 'desc')
            ->select('blogs.created_at', 'blogs.slug', 'blogs.representative_image', 'category.category_title', 'blogs.news_headlines', 'blogs.describe')
            ->paginate(5);


        $list_blog_one_hot_news = DB::table('blogs')
            ->where('blogs.status', '=', 'active')
            ->where('blogs.new_hot', '=', 'active')
            ->orderBy('blogs.created_at', 'desc')
            ->first();

        return view('web.news.category', compact('listCategory', 'list_blog', 'list_blog_one_hot_news'));
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

        $recommended_products = explode(',', $blog->recommended_products);

        $list_product = DB::table('products')
            ->whereIn('id', $recommended_products)
            ->get();

        return view('web.news.details', ['blog' => $blog, 'list_blog' => $list_blog, 'list_product' => $list_product]);
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
            ->paginate(5);

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
                if (empty($value[0]) && empty($value[1]) && empty($value[2]) && empty($value[3]))
                    continue;
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

    public function detailsBasic($slug)
    {
        $product = DB::table('products')
            ->where('path', '=', $slug)
            ->first();

        $feature_description = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'feature_description')
            ->get();

        $vehicle_detail_photos = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'vehicle_detail_photos')
            ->get();

        $actual_photo = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'actual_photo')
            ->get();

        $icon_images = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'icon_images')
            ->get();

        $color_image = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'color_image')
            ->get();

        $images360 = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'images360')
            ->orderBy('id', 'asc')
            ->get();

        $gogo_images_banner2_multi = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'gogo_images_banner2_multi')
            ->orderBy('created_at', 'asc')
            ->get();

        $gogo_images_banner13 = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'gogo_images_banner13')
            ->orderBy('created_at', 'asc')
            ->get();

        $gogo_tinhnang_image = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'gogo_tinhnang_image')
            ->orderBy('created_at', 'asc')
            ->get();

        $viva_upload_video = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'viva_upload_video')
            ->orderBy('created_at', 'asc')
            ->get();
        $viva_gallery = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'viva_gallery')
            ->orderBy('created_at', 'asc')
            ->get();

        $nispa_tinhnang_image = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'nispa_tinhnang_image')
            ->orderBy('created_at', 'asc')
            ->get();

        $nispa_gallery = DB::table('images_products')
            ->where('product_id', '=', $product->id)
            ->where('code', '=', 'nispa_gallery')
            ->orderBy('created_at', 'asc')
            ->get();

        if ($product->interface_type == 2) {
            return view('web.product.ladipage.heidi', compact('product', 'color_image', 'icon_images', 'images360'));
        } elseif ($product->interface_type == 3) {
            return view('web.product.ladipage.gogo', compact('images360', 'color_image', 'icon_images', 'product', 'gogo_tinhnang_image', 'gogo_images_banner13', 'gogo_images_banner2_multi'));
        } elseif ($product->interface_type == 4) {
            return view('web.product.ladipage.nispaviva', compact('viva_gallery', 'vehicle_detail_photos', 'viva_upload_video', 'product', 'color_image', 'icon_images', 'images360'));
        } elseif ($product->interface_type == 5) {
            return view('web.product.ladipage.x3', compact('nispa_gallery', 'nispa_tinhnang_image', 'product', 'color_image', 'icon_images', 'images360'));
        } else {
            return view('web.product.detailsBasic', compact('images360', 'color_image', 'icon_images', 'product', 'feature_description', 'vehicle_detail_photos', 'actual_photo'));
        }
    }

    public function categoryProduct()
    {
        $category = CateProduct::all();

        if (!empty($category)) {
            $products = DB::table('products')
                ->where('status', '=', 'active')
                ->where('product_portfolio', '=', $category[0]->id)
                ->orderBy('created_at', 'desc')
                ->paginate(6);
        }

        $blog1 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct', '=', 2)
            ->orderBy('created_at', 'desc')
            ->get();

        $blog2 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct', '=', 3)
            ->orderBy('created_at', 'desc')
            ->get();

        $blog3 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct', '=', 4)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('web.product.category', compact('category', 'products', 'blog1', 'blog2', 'blog3'));
    }

    public function detailCategoryProduct($id)
    {
        $category = CateProduct::all();

        $products = DB::table('products')
            ->where('status', '=', 'active')
            ->where('product_portfolio', '=', $id)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        $blog1 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct', '=', 2)
            ->orderBy('created_at', 'desc')
            ->get();

        $blog2 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct', '=', 3)
            ->orderBy('created_at', 'desc')
            ->get();

        $blog3 = DB::table('blogs')
            ->where('status', '=', 'active')
            ->where('category_blogproduct', '=', 4)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('web.product.category', compact('category', 'products', 'blog1', 'blog2', 'blog3'));
    }

    public function listStore($desc, Request $request)
    {

        $domain = NULL;
        $flag = NULL;
        if ($desc == 'mien-bac') {
            $domain = 'Miền Bắc';
            $flag = 1;
        } elseif ($desc == 'mien-trung') {
            $domain = 'Miền Trung';
            $flag = 2;
        } elseif ($desc == 'mien-nam') {
            $domain = 'Miền Nam';
            $flag = 3;
        }


        if (!empty($request->has('district')) && $request->get('district') != '') {
            $district = $request->get('district');
        }

        if (!empty($district)) {
            $listStore = DB::table('store')
                ->where('keyword_tags', '=', $this->slugify($district))
                ->paginate(10);
        } else {
            $listStore = DB::table('store')
                ->where('desc', '=', $domain)
                ->paginate(10);
        }


        $listProvince = DB::table('store')
            ->select('latitude')
            ->groupBy('latitude')
            ->get();

        $listDistrict = DB::table('store')
            ->select('longitude')
            ->groupBy('longitude')
            ->get();

        return view('web.store.listStore', compact('listStore', 'flag', 'listProvince', 'listDistrict'));

    }

    function slugify($text)
    {
        $text = preg_replace('/[^a-zA-Z0-9\s]/', '', $text);
        $text = strtolower($text);
        $text = str_replace(' ', '-', $text);
        $text = preg_replace('/-+/', '-', $text);

        return $text;
    }

    public function nearbyStore(Request $request)
    {
        if (!empty($request->has('your_location')) && $request->get('your_location') != '') {
            $your_location = $request->get('your_location');
            $listStore = DB::table('store')
                ->where('description_card', '=', $this->slugify($your_location))
                ->get();
        } else {
            $listStore = [];
        }
        return view('web.store.nearbyStore', compact('listStore'));
    }

    public function policy(Request $request)
    {
        return view('web.contentpage.policy');
    }

}
