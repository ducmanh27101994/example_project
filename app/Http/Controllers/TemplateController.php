<?php


namespace App\Http\Controllers;


class TemplateController extends BaseController
{
    public function homepage()
    {
        return view('template.trangchu');
    }
}
