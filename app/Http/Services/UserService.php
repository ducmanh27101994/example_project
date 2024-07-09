<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function check_login($request, $type)
    {
        $data = [];
        $user = $this->userRepository->findOne([
            'email' => $request->email,
            'type' => $type
        ]);

        if (!($user)) {
            $data['message'] = "Email của bạn chưa đăng ký";
        } else {
            if ($user['status'] == 'new') {
                $data['message'] = 'Email của bạn chưa được kích hoạt';
            } elseif ($user['status'] == 'block') {
                $data['message'] = 'Email của bạn đang tạm khóa';
            } elseif ($user['status'] == 'active') {
                if (!Hash::check($request->password, $user['password'])) {
                    $data['message'] = 'Mật khẩu không chính xác';
                } else {
                    $data['user'] = $user;
                }
            }
        }
        $remember_me = $request->remember;
        if ($remember_me == "on") {
            $minutes = 3600 * 30;
            $hash = $user->id . $user->email . $user->password;
            $cookieValue = Hash::make($hash);
            cookie('admin_login_remember', $cookieValue, $minutes);
            DB::table('users')
                ->where('id', $user->id)
                ->update(['token_web' => $cookieValue]);
        }
        return $data;
    }

    public function login($user, $request)
    {
        $data = [
            'id' => $user['id'],
            'time' => time(),
            'string' => uniqid(),
        ];
//        $token = Authorization::generateToken($data);
        $user_new = $this->userRepository->update($user['id'], [
//            'token_web' => $token,
            'agent' => $request->userAgent(),
            'ip_login' => $request->getClientIp()
        ]);
        return $user_new;
    }

    public function create_employee($request)
    {
        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $status,
            'type' => 1,
            'phone' => $request->phone,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_by' => session()->get('employee')['email'] ?? "",
            'role' => $request->role
        ];
        $user = $this->userRepository->create($data);
        return $user;
    }

    public function get_all_employee($request)
    {
        $search = $request->all();
        $employees = $this->userRepository->get_all_employee($search);
        if ($employees) {
            return $employees;
        }
        return false;
    }

    public function find($id)
    {
        return $this->userRepository->find($id);
    }

    public function update_employee($request, $id)
    {
        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'status' => $status,
            'type' => 1,
            'phone' => $request->phone,
            'updated_by' => session()->get('employee')['email'] ?? "",
            'role' => $request->role
        ];
        $user = $this->userRepository->update($id, $data);
        return $user;
    }


}
