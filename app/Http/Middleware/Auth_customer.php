<?php


namespace App\Http\Middleware;


use App\Http\Repositories\UserRepository;
use Closure;
use Illuminate\Support\Facades\Session;

class Auth_customer
{
    const CUSTOMER = 2;

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle($request, Closure $next)
    {
        $user = $request->session()->get('customer');
        if ($user) {
            $find_user_db = $this->userRepository->find($user['id']);
            if ($find_user_db) {
                if ($request->userAgent() == $find_user_db['agent']) {
                    if ($user['type'] == self::CUSTOMER) {
                        return $next($request);
                    }
                }
            }
        }
        Session::forget('customer');
        return redirect()->route('customer.login');
    }
}
