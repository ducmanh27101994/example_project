<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Requests\FormCreateBlog;
use App\Http\Requests\FormCreateCate;
use App\Http\Requests\FormGeneralConfig;
use App\Http\Services\BlogService;
use App\Http\Services\CategoryService;
use App\Http\Services\ConfigService;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends BaseController
{
    protected $categoryService;
    protected $blogService;

    public function __construct(CategoryService $categoryService,
                                BlogService $blogService )
    {
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;

    }

    public function indexListCategory() {
        $category = Category::all();
        return view('admin.blog.category', ['category' => $category]);

    }

    public function indexCreateCategory() {
        $category = Category::orderBy('id', 'ASC')->get();
        return view('admin.blog.addNewCate', ['category' => $category]);
    }

    public function createCategory(FormCreateCate $request) {
        $cate = $this->categoryService->create_category($request);
        if ($cate) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexListCategory');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexListCategory');
    }

    public function editCate($id) {
        $category = Category::orderBy('id', 'ASC')->get();
        $editCate = $this->categoryService->find($id);
        return view('admin.blog.editCate', ['category' => $category, 'editCate' => $editCate]);
    }

    public function submitEditCate(FormCreateCate $request, $id) {

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

    public function indexListBlog(Request $request) {
        $request->type_query = 'get';
        $blogs = $this->blogService->get_list($request);
        $category = Category::orderBy('id', 'ASC')->get();
        return view('admin.blog.listBlog',['blogs' => $blogs, 'category' => $category]);
    }

    public function createBlog() {
        $category = Category::orderBy('id', 'ASC')->get();
        return view('admin.blog.createBlog', ['category' => $category]);
    }

    public function submitCreateBlog(FormCreateBlog $request) {

        $blog = $this->blogService->create_blog($request);
        if ($blog) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexListBlog');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexListBlog');


    }

    public function editBlog($id) {
        $category = Category::orderBy('id', 'ASC')->get();
        $editBlog = $this->blogService->find($id);
        return view('admin.blog.editBlog', ['category' => $category, 'editBlog' => $editBlog]);
    }

    public function submitEditBlog(FormCreateBlog $request, $id) {

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








}
