<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\CateProductRepository;
use App\Http\Repositories\ImageRepository;
use App\Http\Repositories\ProductRepository;
use App\Http\Requests\FormCreateBlog;
use App\Http\Requests\FormCreateCate;
use App\Http\Requests\FormGeneralConfig;
use App\Http\Services\BlogService;
use App\Http\Services\CategoryService;
use App\Http\Services\ConfigService;
use App\Http\Services\UploadService;
use App\Models\Blog;
use App\Models\Category;
use App\Models\CateProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends BaseController
{
    protected $categoryService;
    protected $blogService;

    protected $repoCateProduct;

    protected $productRepositories;
    protected $imagesRepositories;
    protected $uploadService;

    public function __construct(CategoryService       $categoryService,
                                BlogService           $blogService,
                                CateProductRepository $repoCateProduct,
                                ProductRepository     $productRepositories,
                                ImageRepository       $imagesRepositories,
                                UploadService         $uploadService)
    {
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;
        $this->repoCateProduct = $repoCateProduct;
        $this->productRepositories = $productRepositories;
        $this->imagesRepositories = $imagesRepositories;
        $this->uploadService = $uploadService;

    }

    public function indexListCategory()
    {
        $category = Category::all();
        return view('admin.blog.category', ['category' => $category]);

    }

    public function indexCreateCategory()
    {
        $category = Category::orderBy('id', 'ASC')->get();
        return view('admin.blog.addNewCate', ['category' => $category]);
    }

    public function createCategory(FormCreateCate $request)
    {
        $cate = $this->categoryService->create_category($request);
        if ($cate) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexListCategory');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexListCategory');
    }

    public function editCate($id)
    {
        $category = Category::orderBy('id', 'ASC')->get();
        $editCate = $this->categoryService->find($id);
        return view('admin.blog.editCate', ['category' => $category, 'editCate' => $editCate]);
    }

    public function submitEditCate(FormCreateCate $request, $id)
    {

        if (!$this->categoryService->find($id)) {
            toastr()->error("Không tìm thấy menu", 'Fail');
            return redirect()->route('admin.indexListCategory');
        }
        $cate = $this->categoryService->update_cate($request, $id);
        if ($cate) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editCate', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editCate', ['id' => $id]);

    }

    public function indexListBlog(Request $request)
    {
        $request->type_query = 'get';
        $blogs = $this->blogService->get_list($request);
        $category = Category::orderBy('id', 'ASC')->get();
        return view('admin.blog.listBlog', ['blogs' => $blogs, 'category' => $category]);
    }

    public function createBlog()
    {
        $category = Category::orderBy('id', 'ASC')->get();

        $listProduct = DB::table('products')
            ->where('status', '=', 'active')
            ->get();

        return view('admin.blog.createBlog', ['category' => $category, 'listProduct' => $listProduct]);
    }

    public function submitCreateBlog(FormCreateBlog $request)
    {

        $blog = $this->blogService->create_blog($request);
        if ($blog) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexListBlog');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexListBlog');


    }

    public function editBlog($id)
    {
        $listProduct = DB::table('products')
            ->where('status', '=', 'active')
            ->get();
        $category = Category::orderBy('id', 'ASC')->get();
        $editBlog = $this->blogService->find($id);
        return view('admin.blog.editBlog', ['category' => $category, 'editBlog' => $editBlog, 'listProduct' => $listProduct]);
    }

    public function submitEditBlog(FormCreateBlog $request, $id)
    {

        if (!$this->blogService->find($id)) {
            toastr()->error("Không tìm thấy menu", 'Fail');
            return redirect()->route('admin.indexListBlog');
        }
        $blog = $this->blogService->update_blog($request, $id);
        if ($blog) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editBlog', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editBlog', ['id' => $id]);

    }

    public function indexListCategoryProduct()
    {
        $category = CateProduct::all();
        return view('admin.product.listCateProduct', ['category' => $category]);

    }

    public function createCategoryProduct()
    {

        return view('admin.product.createCateProduct');
    }

    public function submitCreateCategoryProduct(Request $request)
    {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'name' => $request->category_title,
            'status' => $status,
        ];
        $result = $this->repoCateProduct->create($data);

        if ($result) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.list.cate.product');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.list.cate.product');


    }

    public function editCategoryProduct($id)
    {
        $editCate = CateProduct::findOrFail($id);
        return view('admin.product.editCateProduct', ['editCate' => $editCate]);
    }

    public function submitEditCategoryProduct(Request $request, $id)
    {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'name' => $request->category_title,
            'status' => $status,
        ];
        $cate = $this->repoCateProduct->update($id, $data);

        if ($cate) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.list.cate.product', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.list.cate.product', ['id' => $id]);

    }

    public function listProductAdmin()
    {

        $product = DB::table('products')->orderBy('created_at', 'desc')->get();

        return view('admin.product.details.listProduct', compact('product'));
    }

    public function createProductAdmin()
    {
        $categoryProduct = CateProduct::all();
        return view('admin.product.details.createProduct', compact('categoryProduct'));
    }

    public function submitCreateProduct(Request $request)
    {
        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $new_product = (!empty($request->new_product) && $request->new_product == 'on') ? 'active' : 'block';
        $selling_products = (!empty($request->selling_products) && $request->selling_products == 'on') ? 'active' : 'block';
        $promotional_products = (!empty($request->promotional_products) && $request->promotional_products == 'on') ? 'active' : 'block';

        if ($request->representative_image) {
            $representative_image = $this->uploadService->upload_param($request->representative_image);
        }

        $data = [
            'product_name' => !empty($request->product_name) ? $request->product_name : '',
            'distance_traveled' => !empty($request->distance_traveled) ? $request->distance_traveled : '',
            'maximum_speed' => !empty($request->maximum_speed) ? $request->maximum_speed : '',
            'allowable_weight_to_carry' => !empty($request->allowable_weight_to_carry) ? $request->allowable_weight_to_carry : '',
            'describe_input_1' => !empty($request->describe_input_1) ? $request->describe_input_1 : '',
            'describe_textarea_1' => !empty($request->describe_textarea_1) ? $request->describe_textarea_1 : '',
            'describe_input_2' => !empty($request->describe_input_2) ? $request->describe_input_2 : '',
            'describe_textarea_2' => !empty($request->describe_textarea_2) ? $request->describe_textarea_2 : '',
            'describe_input_3' => !empty($request->describe_input_3) ? $request->describe_input_3 : '',
            'describe_textarea_3' => !empty($request->describe_textarea_3) ? $request->describe_textarea_3 : '',
            'describe_input_4' => !empty($request->describe_input_4) ? $request->describe_input_4 : '',
            'describe_textarea_4' => !empty($request->describe_textarea_4) ? $request->describe_textarea_4 : '',
            'detail' => !empty($request->detail) ? $request->detail : '',
            'overview' => !empty($request->overview) ? $request->overview : '',
            'overview_price' => !empty($request->overview_price) ? $request->overview_price : '',
            'chassis' => !empty($request->chassis) ? $request->chassis : '',
            'chassis_price' => !empty($request->chassis_price) ? $request->chassis_price : '',
            'engine' => !empty($request->engine) ? $request->engine : '',
            'engine_price' => !empty($request->engine_price) ? $request->engine_price : '',
            'representative_image' => !empty($representative_image) ? $representative_image : '',
            'product_code' => !empty($request->product_code) ? $request->product_code : '',
            'product_price' => !empty($request->product_price) ? $request->product_price : '',
            'price_comparison' => !empty($request->price_comparison) ? $request->price_comparison : '',
            'product_portfolio' => !empty($request->product_portfolio) ? $request->product_portfolio : '',
            'interface_type' => !empty($request->interface_type) ? $request->interface_type : '',
            'status_product' => !empty($request->status_product) ? $request->status_product : '',
            'page_title_tag' => !empty($request->page_title_tag) ? $request->page_title_tag : '',
            'path' => !empty($request->product_name) ? $this->slugify($request->product_name) : '',
            'keyword_tags' => !empty($request->keyword_tags) ? $request->keyword_tags : '',
            'description_card' => !empty($request->description_card) ? $request->description_card : '',
            'status' => $status,
            'new_product' => $new_product,
            'selling_products' => $selling_products,
            'promotional_products' => $promotional_products,

            //Hedi
            'heidi_images_banner1' => !empty($request->heidi_images_banner1) ? $this->uploadService->upload_param($request->heidi_images_banner1) : '',
            'heidi_images_banner2' => !empty($request->heidi_images_banner2) ? $this->uploadService->upload_param($request->heidi_images_banner2) : '',
            'heidi_images_banner3' => !empty($request->heidi_images_banner3) ? $this->uploadService->upload_param($request->heidi_images_banner3) : '',
            'heidi_images_banner4' => !empty($request->heidi_images_banner4) ? $this->uploadService->upload_param($request->heidi_images_banner4) : '',
            'heidi_images_banner5' => !empty($request->heidi_images_banner5) ? $this->uploadService->upload_param($request->heidi_images_banner5) : '',
            'heidi_images_banner6' => !empty($request->heidi_images_banner6) ? $this->uploadService->upload_param($request->heidi_images_banner6) : '',
            'heidi_title_banner6' => $request->heidi_title_banner6 ?? '',
            'heidi_desc_banner6' => $request->heidi_desc_banner6 ?? '',
            'heidi_images_banner7' => !empty($request->heidi_images_banner7) ? $this->uploadService->upload_param($request->heidi_images_banner7) : '',
            'heidi_title_banner7' => $request->heidi_title_banner7 ?? '',
            'heidi_desc_banner7' => $request->heidi_desc_banner7 ?? '',
            'heidi_images_banner8' => !empty($request->heidi_images_banner8) ? $this->uploadService->upload_param($request->heidi_images_banner8) : '',
            'heidi_title_banner8' => $request->heidi_title_banner8 ?? '',
            'heidi_desc_banner8' => $request->heidi_desc_banner8 ?? '',
            'heidi_images_banner9' => !empty($request->heidi_images_banner9) ? $this->uploadService->upload_param($request->heidi_images_banner9) : '',
            'heidi_title_banner9' => $request->heidi_title_banner9 ?? '',
            'heidi_desc_banner9' => $request->heidi_desc_banner9 ?? '',
            'heidi_images_banner10' => !empty($request->heidi_images_banner10) ? $this->uploadService->upload_param($request->heidi_images_banner10) : '',
            'heidi_images_banner10_1' => !empty($request->heidi_images_banner10_1) ? $this->uploadService->upload_param($request->heidi_images_banner10_1) : '',
            'heidi_title_banner10' => $request->heidi_title_banner10 ?? '',
            'heidi_desc_banner10' => $request->heidi_desc_banner10 ?? '',
            'heidi_images_banner11' => !empty($request->heidi_images_banner11) ? $this->uploadService->upload_param($request->heidi_images_banner11) : '',
            'heidi_images_banner11_1' => !empty($request->heidi_images_banner11_1) ? $this->uploadService->upload_param($request->heidi_images_banner11_1) : '',
            'heidi_title_banner11' => $request->heidi_title_banner11 ?? '',
            'heidi_desc_banner11' => $request->heidi_desc_banner11 ?? '',
            'heidi_images_banner12' => !empty($request->heidi_images_banner12) ? $this->uploadService->upload_param($request->heidi_images_banner12) : '',
            'heidi_images_banner12_1' => !empty($request->heidi_images_banner12_1) ? $this->uploadService->upload_param($request->heidi_images_banner12_1) : '',
            'heidi_title_banner12' => $request->heidi_title_banner12 ?? '',
            'heidi_desc_banner12' => $request->heidi_desc_banner12 ?? '',
            'heidi_images_banner13' => !empty($request->heidi_images_banner13) ? $this->uploadService->upload_param($request->heidi_images_banner13) : '',

            //Gogo
            'gogo_slogan' => $request->gogo_slogan ?? '',
            'gogo_images_banner1' => !empty($request->gogo_images_banner1) ? $this->uploadService->upload_param($request->gogo_images_banner1) : '',
            'gogo_images_banner4' => !empty($request->gogo_images_banner4) ? $this->uploadService->upload_param($request->gogo_images_banner4) : '',
            'gogo_images_banner5' => !empty($request->gogo_images_banner5) ? $this->uploadService->upload_param($request->gogo_images_banner5) : '',
            'gogo_images_banner6' => !empty($request->gogo_images_banner6) ? $this->uploadService->upload_param($request->gogo_images_banner6) : '',
            'gogo_images_banner7' => !empty($request->gogo_images_banner7) ? $this->uploadService->upload_param($request->gogo_images_banner7) : '',
            'gogo_images_banner8' => !empty($request->gogo_images_banner8) ? $this->uploadService->upload_param($request->gogo_images_banner8) : '',
            'gogo_images_banner9' => !empty($request->gogo_images_banner9) ? $this->uploadService->upload_param($request->gogo_images_banner9) : '',
            'gogo_images_banner10' => !empty($request->gogo_images_banner10) ? $this->uploadService->upload_param($request->gogo_images_banner10) : '',
            'gogo_images_banner11' => !empty($request->gogo_images_banner11) ? $this->uploadService->upload_param($request->gogo_images_banner11) : '',
            'gogo_desc_3' => $request->gogo_desc_3 ?? '',
            'gogo_title_banner4' => $request->gogo_title_banner4 ?? '',
            'gogo_desc_banner4' => $request->gogo_desc_banner4 ?? '',
            'gogo_title_banner5' => $request->gogo_title_banner5 ?? '',
            'gogo_desc_banner5' => $request->gogo_desc_banner5 ?? '',
            'gogo_title_banner6' => $request->gogo_title_banner6 ?? '',
            'gogo_desc_banner6' => $request->gogo_desc_banner6 ?? '',
            'gogo_title_banner7' => $request->gogo_title_banner7 ?? '',
            'gogo_desc_banner7' => $request->gogo_desc_banner7 ?? '',
            'gogo_title_banner8' => $request->gogo_title_banner8 ?? '',
            'gogo_desc_banner8' => $request->gogo_desc_banner8 ?? '',
            'gogo_title_banner9' => $request->gogo_title_banner9 ?? '',
            'gogo_desc_banner9' => $request->gogo_desc_banner9 ?? '',
            'gogo_title_banner10' => $request->gogo_title_banner10 ?? '',
            'gogo_desc_banner10' => $request->gogo_desc_banner10 ?? '',
            'gogo_title_banner11' => $request->gogo_title_banner11 ?? '',
            'gogo_desc_banner11' => $request->gogo_desc_banner11 ?? '',
            'gogo_title_banner12' => $request->gogo_title_banner12 ?? '',
            'gogo_desc_banner12' => $request->gogo_desc_banner12 ?? '',

            //Viva
            'viva_slogan' => $request->viva_slogan ?? '',
            'viva_youtube_banner3' => $request->viva_youtube_banner3 ?? '',
            'viva_title_banner4' => $request->viva_title_banner4 ?? '',
            'viva_desc_banner4' => $request->viva_desc_banner4 ?? '',
            'viva_title_banner5' => $request->viva_title_banner5 ?? '',
            'viva_desc_banner5' => $request->viva_desc_banner5 ?? '',
            'viva_title_banner6' => $request->viva_title_banner6 ?? '',
            'viva_desc_banner6' => $request->viva_desc_banner6 ?? '',
            'viva_title_banner7' => $request->viva_title_banner7 ?? '',
            'viva_desc_banner7' => $request->viva_desc_banner7 ?? '',
            'nispa_youtube_banner2' => $request->nispa_youtube_banner2 ?? '',
            'nispa_desc_3' => $request->nispa_desc_3 ?? '',
            'nispa_desc_4' => $request->nispa_desc_4 ?? '',
            'nispa_title_4' => $request->nispa_title_4 ?? '',
            'nispa_desc_5' => $request->nispa_desc_5 ?? '',
            'viva_images_banner1' => !empty($request->viva_images_banner1) ? $this->uploadService->upload_param($request->viva_images_banner1) : '',
            'viva_images_banner2' => !empty($request->viva_images_banner2) ? $this->uploadService->upload_param($request->viva_images_banner2) : '',
            'viva_images_banner3' => !empty($request->viva_images_banner3) ? $this->uploadService->upload_param($request->viva_images_banner3) : '',
            'viva_images_banner4' => !empty($request->viva_images_banner4) ? $this->uploadService->upload_param($request->viva_images_banner4) : '',
            'viva_images_banner5' => !empty($request->viva_images_banner5) ? $this->uploadService->upload_param($request->viva_images_banner5) : '',
            'viva_images_banner6' => !empty($request->viva_images_banner6) ? $this->uploadService->upload_param($request->viva_images_banner6) : '',
            'nispa_images_banner1' => !empty($request->nispa_images_banner1) ? $this->uploadService->upload_param($request->nispa_images_banner1) : '',
            'nispa_images_banner2' => !empty($request->nispa_images_banner2) ? $this->uploadService->upload_param($request->nispa_images_banner2) : '',
            'nispa_images_4' => !empty($request->nispa_images_4) ? $this->uploadService->upload_param($request->nispa_images_4) : '',
        ];

        $product = $this->productRepositories->create($data);

        if (!empty($product)) {
            $feature_description = [];
            if (!empty($request->feature_description)) {
                foreach ($request->feature_description as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $feature_description = [
                        'product_id' => $product->id,
                        'code' => 'feature_description',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($feature_description);
                }
            }

            $vehicle_detail_photos = [];
            if (!empty($request->vehicle_detail_photos)) {
                foreach ($request->vehicle_detail_photos as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $vehicle_detail_photos = [
                        'product_id' => $product->id,
                        'code' => 'vehicle_detail_photos',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($vehicle_detail_photos);
                }
            }

            $actual_photo = [];
            if (!empty($request->actual_photo)) {
                foreach ($request->actual_photo as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $actual_photo = [
                        'product_id' => $product->id,
                        'code' => 'actual_photo',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($actual_photo);
                }
            }

            $icon_images = [];
            if (!empty($request->icon_images)) {
                foreach ($request->icon_images as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $icon_images = [
                        'product_id' => $product->id,
                        'code' => 'icon_images',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($icon_images);
                }
            }

            $color_image = [];
            if (!empty($request->color_image)) {
                foreach ($request->color_image as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'color_image',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            $images360 = [];
            if (!empty($request->images360)) {
                foreach ($request->images360 as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'images360',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->gogo_images_banner2_multi)) {
                foreach ($request->gogo_images_banner2_multi as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'gogo_images_banner2_multi',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->gogo_images_banner13)) {
                foreach ($request->gogo_images_banner13 as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'gogo_images_banner13',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->gogo_tinhnang_image)) {
                foreach ($request->gogo_tinhnang_image as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'gogo_tinhnang_image',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->viva_upload_video)) {
                foreach ($request->viva_upload_video as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'viva_upload_video',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }

            if (!empty($request->viva_gallery)) {
                foreach ($request->viva_gallery as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'viva_gallery',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->nispa_tinhnang_image)) {
                foreach ($request->nispa_tinhnang_image as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'nispa_tinhnang_image',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->nispa_gallery)) {
                foreach ($request->nispa_gallery as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'nispa_gallery',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }


        }

        toastr()->success('Thêm mới thành công', 'Success');
        return redirect()->route('admin.list.product');

    }

    function slugify($text)
    {
        $text = preg_replace('/[^a-zA-Z0-9\s]/', '', $text);
        $text = strtolower($text);
        $text = str_replace(' ', '-', $text);
        $text = preg_replace('/-+/', '-', $text);

        return $text;
    }

    public function editProduct($id)
    {

        $product = DB::table('products')
            ->where('products.id', '=', $id)
            ->first();

        $categoryProduct = CateProduct::all();

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

        $images360 = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'images360')
            ->orderBy('created_at', 'asc')
            ->get();

        $gogo_images_banner2_multi = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'gogo_images_banner2_multi')
            ->orderBy('created_at', 'asc')
            ->get();

        $gogo_images_banner13 = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'gogo_images_banner13')
            ->orderBy('created_at', 'asc')
            ->get();

        $gogo_tinhnang_image = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'gogo_tinhnang_image')
            ->orderBy('created_at', 'asc')
            ->get();

        $viva_upload_video = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'viva_upload_video')
            ->orderBy('created_at', 'asc')
            ->get();

        $viva_gallery = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'viva_gallery')
            ->orderBy('created_at', 'asc')
            ->get();

        $nispa_tinhnang_image = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'nispa_tinhnang_image')
            ->orderBy('created_at', 'asc')
            ->get();

        $nispa_gallery = DB::table('images_products')
            ->where('product_id', '=', $id)
            ->where('code', '=', 'nispa_gallery')
            ->orderBy('created_at', 'asc')
            ->get();


        return view('admin.product.details.editProduct', compact('viva_upload_video', 'viva_gallery', 'nispa_tinhnang_image', 'nispa_gallery', 'gogo_tinhnang_image', 'gogo_images_banner13', 'gogo_images_banner2_multi', 'images360', 'color_image', 'icon_images', 'product', 'categoryProduct', 'feature_description', 'vehicle_detail_photos', 'actual_photo'));

    }

    public function submitEditProduct($id, Request $request)
    {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $new_product = (!empty($request->new_product) && $request->new_product == 'on') ? 'active' : 'block';
        $selling_products = (!empty($request->selling_products) && $request->selling_products == 'on') ? 'active' : 'block';
        $promotional_products = (!empty($request->promotional_products) && $request->promotional_products == 'on') ? 'active' : 'block';

        if ($request->representative_image) {
            $representative_image = $this->uploadService->upload_param($request->representative_image);
        } else {
            $representative_image = $this->productRepositories->find($id)->representative_image;
        }

        $data = [
            'product_name' => !empty($request->product_name) ? $request->product_name : '',
            'distance_traveled' => !empty($request->distance_traveled) ? $request->distance_traveled : '',
            'maximum_speed' => !empty($request->maximum_speed) ? $request->maximum_speed : '',
            'allowable_weight_to_carry' => !empty($request->allowable_weight_to_carry) ? $request->allowable_weight_to_carry : '',
            'describe_input_1' => !empty($request->describe_input_1) ? $request->describe_input_1 : '',
            'describe_textarea_1' => !empty($request->describe_textarea_1) ? $request->describe_textarea_1 : '',
            'describe_input_2' => !empty($request->describe_input_2) ? $request->describe_input_2 : '',
            'describe_textarea_2' => !empty($request->describe_textarea_2) ? $request->describe_textarea_2 : '',
            'describe_input_3' => !empty($request->describe_input_3) ? $request->describe_input_3 : '',
            'describe_textarea_3' => !empty($request->describe_textarea_3) ? $request->describe_textarea_3 : '',
            'describe_input_4' => !empty($request->describe_input_4) ? $request->describe_input_4 : '',
            'describe_textarea_4' => !empty($request->describe_textarea_4) ? $request->describe_textarea_4 : '',
            'detail' => !empty($request->detail) ? $request->detail : '',
            'overview' => !empty($request->overview) ? $request->overview : '',
            'overview_price' => !empty($request->overview_price) ? $request->overview_price : '',
            'chassis' => !empty($request->chassis) ? $request->chassis : '',
            'chassis_price' => !empty($request->chassis_price) ? $request->chassis_price : '',
            'engine' => !empty($request->engine) ? $request->engine : '',
            'engine_price' => !empty($request->engine_price) ? $request->engine_price : '',
            'representative_image' => !empty($representative_image) ? $representative_image : '',
            'product_code' => !empty($request->product_code) ? $request->product_code : '',
            'product_price' => !empty($request->product_price) ? $request->product_price : '',
            'price_comparison' => !empty($request->price_comparison) ? $request->price_comparison : '',
            'product_portfolio' => !empty($request->product_portfolio) ? $request->product_portfolio : '',
            'interface_type' => !empty($request->interface_type) ? $request->interface_type : '',
            'status_product' => !empty($request->status_product) ? $request->status_product : '',
            'page_title_tag' => !empty($request->page_title_tag) ? $request->page_title_tag : '',
            'keyword_tags' => !empty($request->keyword_tags) ? $request->keyword_tags : '',
            'description_card' => !empty($request->description_card) ? $request->description_card : '',
            'status' => $status,
            'new_product' => $new_product,
            'selling_products' => $selling_products,
            'promotional_products' => $promotional_products,

            //Hedi
            'heidi_images_banner1' => !empty($request->heidi_images_banner1) ? $this->uploadService->upload_param($request->heidi_images_banner1) : $this->productRepositories->find($id)->heidi_images_banner1,
            'heidi_images_banner2' => !empty($request->heidi_images_banner2) ? $this->uploadService->upload_param($request->heidi_images_banner2) : $this->productRepositories->find($id)->heidi_images_banner2,
            'heidi_images_banner3' => !empty($request->heidi_images_banner3) ? $this->uploadService->upload_param($request->heidi_images_banner3) : $this->productRepositories->find($id)->heidi_images_banner3,
            'heidi_images_banner4' => !empty($request->heidi_images_banner4) ? $this->uploadService->upload_param($request->heidi_images_banner4) : $this->productRepositories->find($id)->heidi_images_banner4,
            'heidi_images_banner5' => !empty($request->heidi_images_banner5) ? $this->uploadService->upload_param($request->heidi_images_banner5) : $this->productRepositories->find($id)->heidi_images_banner5,
            'heidi_images_banner6' => !empty($request->heidi_images_banner6) ? $this->uploadService->upload_param($request->heidi_images_banner6) : $this->productRepositories->find($id)->heidi_images_banner6,
            'heidi_title_banner6' => $request->heidi_title_banner6 ?? '',
            'heidi_desc_banner6' => $request->heidi_desc_banner6 ?? '',
            'heidi_images_banner7' => !empty($request->heidi_images_banner7) ? $this->uploadService->upload_param($request->heidi_images_banner7) : $this->productRepositories->find($id)->heidi_images_banner7,
            'heidi_title_banner7' => $request->heidi_title_banner7 ?? '',
            'heidi_desc_banner7' => $request->heidi_desc_banner7 ?? '',
            'heidi_images_banner8' => !empty($request->heidi_images_banner8) ? $this->uploadService->upload_param($request->heidi_images_banner8) : $this->productRepositories->find($id)->heidi_images_banner8,
            'heidi_title_banner8' => $request->heidi_title_banner8 ?? '',
            'heidi_desc_banner8' => $request->heidi_desc_banner8 ?? '',
            'heidi_images_banner9' => !empty($request->heidi_images_banner9) ? $this->uploadService->upload_param($request->heidi_images_banner9) : $this->productRepositories->find($id)->heidi_images_banner9,
            'heidi_title_banner9' => $request->heidi_title_banner9 ?? '',
            'heidi_desc_banner9' => $request->heidi_desc_banner9 ?? '',
            'heidi_images_banner10' => !empty($request->heidi_images_banner10) ? $this->uploadService->upload_param($request->heidi_images_banner10) : $this->productRepositories->find($id)->heidi_images_banner10,
            'heidi_images_banner10_1' => !empty($request->heidi_images_banner10_1) ? $this->uploadService->upload_param($request->heidi_images_banner10_1) : $this->productRepositories->find($id)->heidi_images_banner10_1,
            'heidi_title_banner10' => $request->heidi_title_banner10 ?? '',
            'heidi_desc_banner10' => $request->heidi_desc_banner10 ?? '',
            'heidi_images_banner11' => !empty($request->heidi_images_banner11) ? $this->uploadService->upload_param($request->heidi_images_banner11) : $this->productRepositories->find($id)->heidi_images_banner11,
            'heidi_images_banner11_1' => !empty($request->heidi_images_banner11_1) ? $this->uploadService->upload_param($request->heidi_images_banner11_1) : $this->productRepositories->find($id)->heidi_images_banner11_1,
            'heidi_title_banner11' => $request->heidi_title_banner11 ?? '',
            'heidi_desc_banner11' => $request->heidi_desc_banner11 ?? '',
            'heidi_images_banner12' => !empty($request->heidi_images_banner12) ? $this->uploadService->upload_param($request->heidi_images_banner12) : $this->productRepositories->find($id)->heidi_images_banner12,
            'heidi_images_banner12_1' => !empty($request->heidi_images_banner12_1) ? $this->uploadService->upload_param($request->heidi_images_banner12_1) : $this->productRepositories->find($id)->heidi_images_banner12_1,
            'heidi_title_banner12' => $request->heidi_title_banner12 ?? '',
            'heidi_desc_banner12' => $request->heidi_desc_banner12 ?? '',
            'heidi_images_banner13' => !empty($request->heidi_images_banner13) ? $this->uploadService->upload_param($request->heidi_images_banner13) : $this->productRepositories->find($id)->heidi_images_banner13,

            //Gogo
            'gogo_slogan' => $request->gogo_slogan ?? '',
            'gogo_images_banner1' => !empty($request->gogo_images_banner1) ? $this->uploadService->upload_param($request->gogo_images_banner1) : '',
            'gogo_images_banner4' => !empty($request->gogo_images_banner4) ? $this->uploadService->upload_param($request->gogo_images_banner4) : '',
            'gogo_images_banner5' => !empty($request->gogo_images_banner5) ? $this->uploadService->upload_param($request->gogo_images_banner5) : '',
            'gogo_images_banner6' => !empty($request->gogo_images_banner6) ? $this->uploadService->upload_param($request->gogo_images_banner6) : '',
            'gogo_images_banner7' => !empty($request->gogo_images_banner7) ? $this->uploadService->upload_param($request->gogo_images_banner7) : '',
            'gogo_images_banner8' => !empty($request->gogo_images_banner8) ? $this->uploadService->upload_param($request->gogo_images_banner8) : '',
            'gogo_images_banner9' => !empty($request->gogo_images_banner9) ? $this->uploadService->upload_param($request->gogo_images_banner9) : '',
            'gogo_images_banner10' => !empty($request->gogo_images_banner10) ? $this->uploadService->upload_param($request->gogo_images_banner10) : '',
            'gogo_images_banner11' => !empty($request->gogo_images_banner11) ? $this->uploadService->upload_param($request->gogo_images_banner11) : '',
            'gogo_desc_3' => $request->gogo_desc_3 ?? '',
            'gogo_title_banner4' => $request->gogo_title_banner4 ?? '',
            'gogo_desc_banner4' => $request->gogo_desc_banner4 ?? '',
            'gogo_title_banner5' => $request->gogo_title_banner5 ?? '',
            'gogo_desc_banner5' => $request->gogo_desc_banner5 ?? '',
            'gogo_title_banner6' => $request->gogo_title_banner6 ?? '',
            'gogo_desc_banner6' => $request->gogo_desc_banner6 ?? '',
            'gogo_title_banner7' => $request->gogo_title_banner7 ?? '',
            'gogo_desc_banner7' => $request->gogo_desc_banner7 ?? '',
            'gogo_title_banner8' => $request->gogo_title_banner8 ?? '',
            'gogo_desc_banner8' => $request->gogo_desc_banner8 ?? '',
            'gogo_title_banner9' => $request->gogo_title_banner9 ?? '',
            'gogo_desc_banner9' => $request->gogo_desc_banner9 ?? '',
            'gogo_title_banner10' => $request->gogo_title_banner10 ?? '',
            'gogo_desc_banner10' => $request->gogo_desc_banner10 ?? '',
            'gogo_title_banner11' => $request->gogo_title_banner11 ?? '',
            'gogo_desc_banner11' => $request->gogo_desc_banner11 ?? '',
            'gogo_title_banner12' => $request->gogo_title_banner12 ?? '',
            'gogo_desc_banner12' => $request->gogo_desc_banner12 ?? '',

            //Viva
            'viva_slogan' => $request->viva_slogan ?? '',
            'viva_youtube_banner3' => $request->viva_youtube_banner3 ?? '',
            'viva_title_banner4' => $request->viva_title_banner4 ?? '',
            'viva_desc_banner4' => $request->viva_desc_banner4 ?? '',
            'viva_title_banner5' => $request->viva_title_banner5 ?? '',
            'viva_desc_banner5' => $request->viva_desc_banner5 ?? '',
            'viva_title_banner6' => $request->viva_title_banner6 ?? '',
            'viva_desc_banner6' => $request->viva_desc_banner6 ?? '',
            'viva_title_banner7' => $request->viva_title_banner7 ?? '',
            'viva_desc_banner7' => $request->viva_desc_banner7 ?? '',
            'nispa_youtube_banner2' => $request->nispa_youtube_banner2 ?? '',
            'nispa_desc_3' => $request->nispa_desc_3 ?? '',
            'nispa_desc_4' => $request->nispa_desc_4 ?? '',
            'nispa_title_4' => $request->nispa_title_4 ?? '',
            'nispa_desc_5' => $request->nispa_desc_5 ?? '',
            'viva_images_banner1' => !empty($request->viva_images_banner1) ? $this->uploadService->upload_param($request->viva_images_banner1) : '',
            'viva_images_banner2' => !empty($request->viva_images_banner2) ? $this->uploadService->upload_param($request->viva_images_banner2) : '',
            'viva_images_banner3' => !empty($request->viva_images_banner3) ? $this->uploadService->upload_param($request->viva_images_banner3) : '',
            'viva_images_banner4' => !empty($request->viva_images_banner4) ? $this->uploadService->upload_param($request->viva_images_banner4) : '',
            'viva_images_banner5' => !empty($request->viva_images_banner5) ? $this->uploadService->upload_param($request->viva_images_banner5) : '',
            'viva_images_banner6' => !empty($request->viva_images_banner6) ? $this->uploadService->upload_param($request->viva_images_banner6) : '',
            'nispa_images_banner1' => !empty($request->nispa_images_banner1) ? $this->uploadService->upload_param($request->nispa_images_banner1) : '',
            'nispa_images_banner2' => !empty($request->nispa_images_banner2) ? $this->uploadService->upload_param($request->nispa_images_banner2) : '',
            'nispa_images_4' => !empty($request->nispa_images_4) ? $this->uploadService->upload_param($request->nispa_images_4) : '',

            ];

        $product = $this->productRepositories->update($id, $data);


        if (!empty($product)) {
            $feature_description = [];
            if (!empty($request->feature_description)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'feature_description')
                    ->delete();
                foreach ($request->feature_description as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $feature_description = [
                        'product_id' => $product->id,
                        'code' => 'feature_description',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($feature_description);
                }
            }

            $vehicle_detail_photos = [];
            if (!empty($request->vehicle_detail_photos)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'vehicle_detail_photos')
                    ->delete();
                foreach ($request->vehicle_detail_photos as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $vehicle_detail_photos = [
                        'product_id' => $product->id,
                        'code' => 'vehicle_detail_photos',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($vehicle_detail_photos);
                }
            }

            $actual_photo = [];
            if (!empty($request->actual_photo)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'actual_photo')
                    ->delete();
                foreach ($request->actual_photo as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $actual_photo = [
                        'product_id' => $product->id,
                        'code' => 'actual_photo',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($actual_photo);
                }
            }

            $icon_images = [];
            if (!empty($request->icon_images)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'icon_images')
                    ->delete();
                foreach ($request->icon_images as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $icon_images = [
                        'product_id' => $product->id,
                        'code' => 'icon_images',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($icon_images);
                }
            }

            $color_image = [];
            if (!empty($request->color_image)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'color_image')
                    ->delete();
                foreach ($request->color_image as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'color_image',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            $images360 = [];
            if (!empty($request->images360)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'images360')
                    ->delete();
                foreach ($request->images360 as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'images360',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }

            if (!empty($request->gogo_images_banner2_multi)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'gogo_images_banner2_multi')
                    ->delete();
                foreach ($request->gogo_images_banner2_multi as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'gogo_images_banner2_multi',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->gogo_images_banner13)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'gogo_images_banner13')
                    ->delete();
                foreach ($request->gogo_images_banner13 as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'gogo_images_banner13',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->gogo_tinhnang_image)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'gogo_tinhnang_image')
                    ->delete();
                foreach ($request->gogo_tinhnang_image as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'gogo_tinhnang_image',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->viva_upload_video)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'viva_upload_video')
                    ->delete();
                foreach ($request->viva_upload_video as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'viva_upload_video',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }

            if (!empty($request->viva_gallery)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'viva_gallery')
                    ->delete();
                foreach ($request->viva_gallery as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'viva_gallery',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->nispa_tinhnang_image)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'nispa_tinhnang_image')
                    ->delete();
                foreach ($request->nispa_tinhnang_image as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'nispa_tinhnang_image',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
            if (!empty($request->nispa_gallery)) {
                DB::table('images_products')
                    ->where('product_id', '=', $id)
                    ->where('code', '=', 'nispa_gallery')
                    ->delete();
                foreach ($request->nispa_gallery as $value) {
                    $images = $this->uploadService->upload_param($value);
                    $color_image = [
                        'product_id' => $product->id,
                        'code' => 'nispa_gallery',
                        'images' => $images
                    ];
                    $this->imagesRepositories->create($color_image);
                }
            }
        }

        toastr()->success('Thêm mới thành công', 'Success');
        return redirect()->route('admin.list.product');

    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->back();
    }

    public function createBuild($id)
    {
        $product = Product::findOrFail($id);
        $icon_images = [];
        $color_image = [];
        $listStore = [];
        if (!empty($product)) {
            $icon_images = DB::table('images_products')
                ->where('product_id', '=', $product->id)
                ->where('code', '=', 'icon_images')
                ->get();
            $color_image = DB::table('images_products')
                ->where('product_id', '=', $product->id)
                ->where('code', '=', 'color_image')
                ->get();

            $listStore = DB::table('store')->get();
        }

        return view('web.order.oder', compact('product', 'icon_images', 'color_image','listStore'));
    }

    public function createOrder(Request $request)
    {
        $data = [
            'id_product' => $request->id_product ?? '',
            'color_product' => $request->color_product ?? '',
            'price_product' => $request->price_product ?? '',
            'chu_so_huu' => $request->chu_so_huu ?? '',
            'billingLastName' => $request->billingLastName ?? '',
            'billingCompanyName' => $request->billingCompanyName ?? '',
            'identifyId' => $request->identifyId ?? '',
            'taxCode' => $request->taxCode ?? '',
            'phoneNumber' => $request->phoneNumber ?? '',
            'email' => $request->email ?? '',
            'storeList' => $request->storeList ?? '',
        ];

        try {
            DB::table('bill')->insert($data);
            return response()->json([
                'status' => 200,
                'message' => 'Order created successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Error creating order: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function listBill() {

        $result = DB::table('bill as b')
            ->leftJoin('products as p','p.id', '=','b.id_product')
            ->leftJoin('store as s','s.id','=','b.storeList')
            ->leftJoin('images_products as i','i.id','=','b.color_product')
            ->orderBy('b.id','desc')
            ->select('b.id','i.images','s.title_store','p.product_name','b.price_product','b.chu_so_huu','b.billingLastName','b.billingCompanyName','b.identifyId','b.taxCode','b.phoneNumber','b.email','b.employee','b.storeList')
            ->get();
        if (empty($result)) {
            $result = [];
        }
        return view('admin.product.listBill', compact('result'));
    }


}
