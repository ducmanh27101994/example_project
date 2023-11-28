<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\ContactRepository;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends BaseController
{
    protected $contactRepository;


    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

     public function indexContact(Request $request){
        $request->type_query = 'get';

        $contact = $this->contactRepository->get_list($request);
        return view('admin.contract.contact', ['contact' => $contact]);
     }

    public function editContact($id){

        $contact = $this->contactRepository->find($id);
        return view('admin.contract.contactDetail', ['contact' => $contact]);
    }

    public function submitStatusContact(Request $request, $id){

        if (!$this->contactRepository->find($id)) {
            toastr()->error("Không tìm thấy contact", 'Fail');
            return redirect()->route('admin.indexListBlog');
        }
        $data_old = $this->contactRepository->find($id);
        $status = (!empty($request->status) && $request->status == 'on') ? 'process' : 'block';
        $data = [
            'full_name' => $data_old->full_name,
            'email' => $data_old->email,
            'phone' => $data_old->phone,
            'status' => $status,
        ];
        $contact = $this->contactRepository->update($id, $data);
        if ($contact) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editContact', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editContact', ['id' => $id]);

    }

    public function submitEmailContact(Request  $request) {

        $status = (!empty($request->status) && $request->status == 'on') ? 'process' : 'block';

        $data = [
            'full_name' => '',
            'email' => $request->email,
            'phone' => '',
            'status' => $status,
        ];
        $contact = $this->contactRepository->create($data);
        if ($contact) {

            $config = DB::table('table_configs')->first();
            if (!empty($config)) {
                $message = [
                    'content' => 'has been created!',
                ];
                SendEmail::dispatch($message, [$config->company_email]);
            }

            toastr()->success('Bạn đã đăng ký email thành công', 'Success');
            return redirect()->back();
        }
    }













}
