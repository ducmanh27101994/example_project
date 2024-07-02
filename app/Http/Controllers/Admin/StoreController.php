<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\BannerAdsRepository;
use App\Http\Repositories\IndependentContentRepository;
use App\Http\Repositories\StoreRepository;
use App\Http\Requests\FormCreateAccount;
use App\Http\Requests\FormCreateBannerAds;
use App\Http\Requests\FormCreateContentSingle;
use App\Http\Requests\FormCreateStore;
use App\Http\Requests\FormLogin;
use App\Http\Services\Import;
use App\Http\Services\UploadService;
use App\Models\BannerAds;
use App\Models\IndependentContent;
use App\Models\Store;
use App\Models\Users;
use App\Service\Api;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Yoeunes\Toastr\Facades\Toastr;

class StoreController extends BaseController
{
    protected $storeRepository;
    protected $uploadService;
    protected $import;

    public function __construct(StoreRepository $storeRepository, UploadService $uploadService, Import $import)
    {
        $this->storeRepository = $storeRepository;
        $this->uploadService = $uploadService;
        $this->import = $import;

    }

    public function indexStore(Request $request)
    {
        $store = $this->storeRepository->get_list($request);

        return view('admin.cuahang.listStore', ['store' => $store]);
    }

    public function createStore()
    {
        return view('admin.cuahang.addStore');
    }

    public function submitStore(Request $request)
    {

        $status = (!empty($request->status) && $request->status == 'on') ? '1' : 'block';
        if ($request->image_store) {
            $image_store = $this->uploadService->upload_param($request->image_store);
        }
        $result = DB::table('store')->orderBy('id','desc')->first();
        $data = [
            'id' => $result->id + 1 ?? '',
            'image_store' => $image_store ?? '',
            'status' => $status,
            'title_store' => $request->title_store,
            'latitude' => $request->province,
            'longitude' => $request->district,
            'desc' => $request->desc,
            'address' => $request->address,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $this->slugify($request->district),
            'description_card' => $this->slugify($request->province),
            'facebook' => $request->facebook,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $store = DB::table('store')->insert($data);
        if ($store) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexStore');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexStore');



//        $file = $request->upload_file;
//        $sheetData = $this->import->get_data_import($file);
//        $listFail = [];
//        foreach ($sheetData as $key => $value) {
//            if ($key >= 1) {
//                $data = array(
//                    'image_store' => NULL,
//                    'status' => 1,
//                    'title_store' => $value[1],
//                    'latitude' => $value[3],
//                    'longitude' => $value[4],
//                    'desc' => $value[5],
//                    'address' => $value[2],
//                    'page_title_tag' => $value[7],
//                    'path' => $value[6],
//                    'keyword_tags' => $this->slugify($value[4]),
//                    'description_card' => $this->slugify($value[3]),
//                );
//                $this->storeRepository->create($data);
//            }
//        }

    }

    function slugify($text) {
        $text = preg_replace('/[^a-zA-Z0-9\s]/', '', $text);
        $text = strtolower($text);
        $text = str_replace(' ', '-', $text);
        $text = preg_replace('/-+/', '-', $text);

        return $text;
    }

    public function editStore($id)
    {
        $store = $this->storeRepository->find($id);
        return view('admin.cuahang.editStore', ['store' => $store]);
    }

    public function submitEditStore(Request $request, $id)
    {
        $dataOld = $this->storeRepository->find($id);
        if (!$dataOld) {
            toastr()->error("Không tìm thấy thông tin", 'Fail');
            return redirect()->route('admin.indexStore');
        }

        $status = (!empty($request->status) && $request->status == 'on') ? '1' : 'block';
        if ($request->image_store) {
            $image_store = $this->uploadService->upload_param($request->image_store);
        }
        $data = [
            'image_store' => $image_store ?? $dataOld->image_store,
            'status' => $status,
            'title_store' => $request->title_store,
            'latitude' => $request->province,
            'longitude' => $request->district,
            'desc' => $request->desc,
            'address' => $request->address,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $this->slugify($request->district),
            'description_card' => $this->slugify($request->province),
            'facebook' => $request->facebook,
        ];
        $store = $this->storeRepository->update($id, $data);

        if ($store) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editStore', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editStore', ['id' => $id]);
    }

    public function searchStore(Request $request)
    {
        $query = $request->input('searchTitleStore');
        $results = Store::where('title_store', 'LIKE', '%' . $query . '%')->get();
        return view('admin.cuahang.listStore', ['store' => $results]);
    }


}
