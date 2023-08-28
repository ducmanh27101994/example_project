<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\IndependentContentRepository;
use App\Http\Requests\FormCreateAccount;
use App\Http\Requests\FormCreateContentSingle;
use App\Http\Requests\FormLogin;
use App\Http\Services\UploadService;
use App\Models\IndependentContent;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Yoeunes\Toastr\Facades\Toastr;

class IndependentContentController extends BaseController
{
    protected $independentContentRepository;
    protected $uploadService;

    public function __construct(IndependentContentRepository $independentContentRepository, UploadService $uploadService)
    {
        $this->independentContentRepository = $independentContentRepository;
        $this->uploadService = $uploadService;

    }

    public function indexStaticPage()
    {
        $staticPage = IndependentContent::orderBy('id', 'DESC')->get();

        return view('admin.tienich.singleContent', ['staticPage' => $staticPage]);
    }

    public function createStaticPage()
    {

        return view('admin.tienich.addContentSingle');
    }

    public function submitStaticPage(FormCreateContentSingle $request)
    {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        if ($request->avatar) {
            $avatar = $this->uploadService->upload_param($request->avatar);
        }
        $data = [
            'avatar' => $avatar ?? '',
            'status' => $status,
            'title' => $request->title,
            'location' => $request->location,
            'detail' => $request->detail,
            'link' => $request->link,
        ];
        $staticPage = $this->independentContentRepository->create($data);
        if ($staticPage) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexStaticPage');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexStaticPage');

    }

    public function editStaticPage($id)
    {
        $staticPage = $this->independentContentRepository->find($id);
        return view('admin.tienich.editContentSingle', ['staticPage' => $staticPage]);
    }

    public function submitEditStaticPage(Request $request, $id)
    {
        $dataOld = $this->independentContentRepository->find($id);
        if (!$dataOld) {
            toastr()->error("Không tìm thấy thông tin", 'Fail');
            return redirect()->route('admin.indexStaticPage');
        }

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        if ($request->avatar) {
            $avatar = $this->uploadService->upload_param($request->avatar);
        }
        $data = [
            'avatar' => $avatar ?? $dataOld->avatar,
            'status' => $status,
            'title' => $request->title,
            'location' => $request->location,
            'detail' => $request->detail,
            'link' => $request->link,
        ];
        $staticPage = $this->independentContentRepository->update($id, $data);

        if ($staticPage) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editStaticPage', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editStaticPage', ['id' => $id]);
    }


}
