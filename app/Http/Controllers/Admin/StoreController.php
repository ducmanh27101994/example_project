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
use App\Http\Services\UploadService;
use App\Models\BannerAds;
use App\Models\IndependentContent;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Yoeunes\Toastr\Facades\Toastr;

class StoreController extends BaseController
{
    protected $storeRepository;
    protected $uploadService;

    public function __construct(StoreRepository $storeRepository, UploadService $uploadService)
    {
        $this->storeRepository = $storeRepository;
        $this->uploadService = $uploadService;

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

    public function submitStore(FormCreateStore $request)
    {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        if ($request->image_store) {
            $image_store = $this->uploadService->upload_param($request->image_store);
        }
        $data = [
            'image_store' => $image_store ?? '',
            'status' => $status,
            'title_store' => $request->title_store,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'desc' => $request->desc,
            'address' => $request->address,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $request->keyword_tags,
            'description_card' => $request->description_card,
        ];
        $store = $this->storeRepository->create($data);
        if ($store) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexStore');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexStore');

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

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        if ($request->image_store) {
            $image_store = $this->uploadService->upload_param($request->image_store);
        }
        $data = [
            'image_store' => $image_store ?? $dataOld->image_store,
            'status' => $status,
            'title_store' => $request->title_store,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'desc' => $request->desc,
            'address' => $request->address,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $request->keyword_tags,
            'description_card' => $request->description_card,
        ];
        $store = $this->storeRepository->update($id, $data);

        if ($store) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editStore', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editStore', ['id' => $id]);
    }


}
