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
    public function aboutus()
    {
        return view('web.aboutus.abouts');
    }
    public function categoryNews()
    {
        return view('web.news.category');
    }
    public function detailsNews()
    {
        return view('web.news.details');
    }
    public function listStore()
    {
        return view('web.store.listStore');
    }
    public function nearbyStore()
    {
        return view('web.store.nearbyStore');
    }
    public function categoryProduct()
    {
        return view('template.category');
    }
    public function detailsBasic()
    {
        return view('template.detailsBasic');
    }
    public function listProductAdmin()
    {
        return view('admin.product.details.listProduct');
    }
    public function createProductAdmin()
    {
        return view('admin.product.details.createProduct');
    }
    public function heidi()
    {
        return view('web.product.ladipage.heidi');
    }
    public function gogo()
    {
        return view('web.product.ladipage.gogo');
    }
}
