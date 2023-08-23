<?php


namespace App\Http\Controllers;


class TemplateController extends BaseController
{
    public function login()
    {
        return view('template.login');
    }
    public function dashboard()
    {
        return view('template.dashboard');
    }
    public function account()
    {
        return view('template.account.account');
    }
    public function createAccount()
    {
        return view('template.account.createAccount');
    }
    public function generalConfig()
    {
        return view('template.config.generalConfig');
    }
    public function bannerAndFooter()
    {
        return view('template.config.bannerAndFooter');
    }
    public function mainmenu()
    {
        return view('template.menu.mainmenu');
    }
    public function addmenu()
    {
        return view('template.menu.addmenu');
    }
}
