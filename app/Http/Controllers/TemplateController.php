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
    public function categoryBlog()
    {
        return view('template.blog.category');
    }
    public function addNewCategoryBlog()
    {
        return view('template.blog.addNewCate');
    }
    public function item()
    {
        return view('template.blog.item');
    }
    public function addNewItemBlog()
    {
        return view('template.blog.addItem');
    }
    public function contact()
    {
        return view('template.contact.contact');
    }
    public function contactDetails()
    {
        return view('template.contact.contactDetails');
    }
    public function map()
    {
        return view('template.contact.map');
    }
    public function tichhopseo()
    {
        return view('template.tichhop.seo');
    }
    public function tichhopanalytics()
    {
        return view('template.tichhop.analytics');
    }
    public function tichhopfanpage()
    {
        return view('template.tichhop.fanpage');
    }
    public function tichhoplivechat()
    {
        return view('template.tichhop.livechat');
    }
    public function tichhopmastertools()
    {
        return view('template.tichhop.mastertools');
    }
    public function tichhopsocial()
    {
        return view('template.tichhop.social');
    }
    public function tichhopAfterBody()
    {
        return view('template.tichhop.afterBody');
    }
    public function tichhopBeforeBody()
    {
        return view('template.tichhop.beforeBody');
    }
    public function tienichSingleContent()
    {
        return view('template.tienich.singleContent');
    }
    public function tienichAddContentSingle()
    {
        return view('template.tienich.addContentSingle');
    }
    public function tienichAdvs()
    {
        return view('template.tienich.advs');
    }
    public function tienichAdvsPosition()
    {
        return view('template.tienich.advsPosition');
    }

    public function cuahangCate()
    {
        return view('template.cuahang.cateStore');
    }
    public function cuahangAddCate()
    {
        return view('template.cuahang.addCateStore');
    }
    public function cuahangItem()
    {
        return view('template.cuahang.item');
    }
    public function cuahangAddItem()
    {
        return view('template.cuahang.addItem');
    }
}
