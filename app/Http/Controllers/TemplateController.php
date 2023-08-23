<?php


namespace App\Http\Controllers;


class TemplateController extends BaseController
{
    public function example()
    {
        return view('template.example');
    }
    public function login()
    {
        return view('template.login');
    }
}
