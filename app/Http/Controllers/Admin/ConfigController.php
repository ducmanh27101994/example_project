<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;

class ConfigController extends BaseController
{


    public function indexConfig() {
        return view('admin.config.generalConfig');
    }

}
