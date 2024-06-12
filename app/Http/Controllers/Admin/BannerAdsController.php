<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\BannerAdsRepository;
use App\Http\Repositories\IndependentContentRepository;
use App\Http\Requests\FormCreateAccount;
use App\Http\Requests\FormCreateBannerAds;
use App\Http\Requests\FormCreateContentSingle;
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

class BannerAdsController extends BaseController
{
    protected $bannerAdsRepository;
    protected $uploadService;

    public function __construct(BannerAdsRepository $bannerAdsRepository, UploadService $uploadService)
    {
        $this->bannerAdsRepository = $bannerAdsRepository;
        $this->uploadService = $uploadService;

    }

    public function indexBannerAds()
    {
        $banner = BannerAds::orderBy('id', 'ASC')->get();

        return view('admin.tienich.adsc', ['banner' => $banner]);
    }

    public function createBannerAds()
    {

        return view('admin.tienich.advsPosition');
    }

    public function submitBannerAds(FormCreateBannerAds $request)
    {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        if ($request->image_banner) {
            $image_banner = $this->uploadService->upload_param($request->image_banner);
        }
        if ($request->image_banner_mobile) {
            $image_banner_mobile = $this->uploadService->upload_param($request->image_banner_mobile);
        }
        $data = [
            'image_banner' => $image_banner ?? '',
            'status' => $status,
            'title' => $request->title,
            'code_ads' => $request->code_ads,
            'desc' => $request->desc,
            'link' => $request->txt_link,
            'image_banner_mobile' => $image_banner_mobile,
        ];
        $banner = $this->bannerAdsRepository->create($data);
        if ($banner) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexBannerAds');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexBannerAds');

    }

    public function editBannerAds($id)
    {
        $banner = $this->bannerAdsRepository->find($id);
        return view('admin.tienich.editPosition', ['banner' => $banner]);
    }

    public function submitEditBannerAds(Request $request, $id)
    {
        $dataOld = $this->bannerAdsRepository->find($id);
        if (!$dataOld) {
            toastr()->error("Không tìm thấy thông tin", 'Fail');
            return redirect()->route('admin.indexBannerAds');
        }

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        if ($request->image_banner) {
            $image_banner = $this->uploadService->upload_param($request->image_banner);
        }
        if ($request->image_banner_mobile) {
            $image_banner_mobile = $this->uploadService->upload_param($request->image_banner_mobile);
        }
        $data = [
            'image_banner' => $image_banner ?? $dataOld->image_banner,
            'status' => $status,
            'title' => $request->title,
            'code_ads' => $request->code_ads,
            'desc' => $request->desc,
            'link' => $request->txt_link,
            'image_banner_mobile' => $image_banner_mobile,
        ];
        $banner = $this->bannerAdsRepository->update($id, $data);

        if ($banner) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.indexBannerAds');
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.indexBannerAds');
    }


}
