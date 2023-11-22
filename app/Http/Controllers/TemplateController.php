<?php


namespace App\Http\Controllers;


class TemplateController extends BaseController
{
    public function contact()
    {
        return view('web.contact.contact');
    }
    public function login()
    {
        return view('web.account.login');
    }
    public function register()
    {
        return view('web.account.register');
    }
}
