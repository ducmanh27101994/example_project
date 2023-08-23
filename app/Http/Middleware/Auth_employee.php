<?php


namespace App\Http\Middleware;


use App\Http\Repositories\UserRepository;
use Closure;
use Illuminate\Support\Facades\Session;

class Auth_employee
{
    const EMPLOYEE = 1;

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle($request, Closure $next)
    {
        $user = $request->session()->get('employee');
        if ($user) {
            $find_user_db = $this->userRepository->find($user['id']);
            if ($find_user_db) {
                if ($request->userAgent() == $find_user_db['agent']) {
                    if ($user['type'] == self::EMPLOYEE) {
                        return $next($request);
                    }
                }
            }
        }
        Session::forget('employee');
        return redirect()->route('admin.login');
    }
}
