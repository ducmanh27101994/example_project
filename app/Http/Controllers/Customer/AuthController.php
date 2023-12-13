<?php


namespace App\Http\Controllers\Customer;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\UserRepository;
use App\Http\Services\UserService;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Yoeunes\Toastr\Facades\Toastr;

class AuthController extends BaseController
{
    protected $userService;
    protected $userRepository;

    public function __construct(UserService $userService, UserRepository $userRepository
    )
    {
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }

    public function register()
    {
        $last = url()->previous();
        if (!in_array($last, [route('customer.login'), route('customer.register')])) {
            Session::put('previous', url()->previous());
        }
        return view('customer.auth.register');
    }

    public function login()
    {
        $last = url()->previous();
        if (!in_array($last, [route('customer.login'), route('customer.register')])) {
            Session::put('previous', url()->previous());
        }
        return view('customer.auth.login');
    }

    public function indexLogin()
    {

        return view('web.account.login');
    }

    public function indexRegister()
    {

        return view('web.account.register');
    }

    public function registerSubmit(Request $request)
    {

        $messages = [
            'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'password.regex' => 'Mật khẩu phải chứa ít nhất 1 số hoặc ký tự đặc biệt.',
            'email.required' => 'Email là trường bắt buộc.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
        ];

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => [
                'required',
                'confirmed',
                'min:8', // Ít nhất 8 ký tự
                'regex:/^(?=.*[0-9!@#$%^&*])[A-Za-z0-9!@#$%^&*]+$/'
                // Ít nhất 1 số hoặc ký tự đặc biệt (trong ví dụ này, sử dụng 0-9 và !@#$%^&*)
            ],
        ], $messages);

        $check_email = DB::table('users')
            ->where('email', '=', $request->email)
            ->where('type', '=', '2')
            ->get();

        if (count($check_email) > 0) {
            Toastr::error($check_email[0]);
            return redirect()->back()->withInput();
        }


        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'active',
            'type' => 2,
            'phone' => $request->phone,
            'created_at' => date('Y-m-d H:i:s', time()),
        ];
        $user = $this->userRepository->create($data);


        if ($user) {
            Toastr::success('Đăng ký thành công');
            return view('web.account.login');
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function submitLogin(Request $request)
    {

        $data = [];
        $user = $this->userRepository->findOne([
            'email' => $request->email,
            'type' => 2
        ]);
        if (!($user)) {
            $data['message'] = 'Email của bạn chưa đăng ký';
        } else {
            if (!Hash::check($request->password, $user['password'])) {
                $data['message'] = 'Mật khẩu không khớp';
            } else {
                $data['user'] = $user;
            }
        }

        if (!empty($data['message'])) {
            $error = $data['message'];
        } else {
            $user = $this->userService->login($data['user'], $request);
            if ($user) {
                Session::put('customer', $user);

                Toastr::success('Đăng nhập thành công');
                return redirect()->route('home.page');

            } else {
                $error = 'Đăng nhập không thành công';
            }
        }
        Toastr::error($error);
        return back()->withInput();
    }

    public function logoutCustomer()
    {
        Session::forget('customer');
        Session::forget('previous');
        Session::forget('callback_authozion');
        return redirect()->route('home.page');

    }


}
