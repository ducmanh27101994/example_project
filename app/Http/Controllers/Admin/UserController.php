<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Requests\FormCreateAccount;
use App\Http\Requests\FormLogin;
use App\Http\Requests\FormUpdateEmployee;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Yoeunes\Toastr\Facades\Toastr;

class UserController extends BaseController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;

    }

    public function login()
    {
        return view('admin.login');
    }

    public function employee_login(FormLogin $request)
    {
        $data = $this->userService->check_login($request, 1);
        if (!empty($data['message'])) {
            $error = $data['message'];
        } else {
            $user = $this->userService->login($data['user'], $request);
            if ($user) {
                Session::put('employee', $user);
                return redirect()->route('admin.dashboard');
            } else {
                $error = 'Thông tin đăng nhập chưa chính xác';
            }
        }
        Toastr::error($error);
        return back()->withInput();
    }

    public function logout()
    {
        Session::forget('employee');
        return redirect()->route('admin.login');

    }

    public function indexAccount(Request $request) {

        $employees = $this->userService->get_all_employee($request);
        $array = $employees->toArray();
        $page = $array['current_page'];
        $perPage = $array['per_page'];
        $perPage = ($page - 1) * $perPage;
        return view('admin.account.account', [
            'employees' => $employees,
            'perPage' => $perPage,
        ]);

    }

    public function indexCreateAccount() {
        return view('admin.account.createAccount');
    }

    public function submitCreateAccount(FormCreateAccount $request) {

        $user = $this->userService->create_employee($request);
        if ($user) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.account');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.account');
    }

    public function edit_employee($id)
    {
        $user = $this->userService->find($id);
        return view('admin.account.updateAccount', [
            'user' => $user,
        ]);
    }

    public function update_employee(Request $request, $id)
    {

        if (!$this->userService->find($id)) {
            toastr()->error("Không tìm thấy tài khoản", 'Fail');
            return redirect()->route('admin.account');
        }
        $user = $this->userService->update_employee($request, $id);
        if ($user) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editAccount', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editAccount', ['id' => $id]);
    }

}
